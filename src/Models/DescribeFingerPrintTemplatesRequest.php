<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;

class DescribeFingerPrintTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $loginToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'clientId' => 'ClientId',
        'loginToken' => 'LoginToken',
        'regionId' => 'RegionId',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
