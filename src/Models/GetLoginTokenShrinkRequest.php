<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class GetLoginTokenShrinkRequest extends Model
{
    /**
     * @description The verification code that is generated by the virtual MFA device. This parameter is required if you set `CurrentStage` to `MFAVerify`.
     *
     * @example 47****
     *
     * @var string
     */
    public $authenticationCode;

    /**
     * @var string
     */
    public $availableFeaturesShrink;

    /**
     * @description The ID of the Alibaba Cloud Workspace client. The system generates a unique ID for each client.
     *
     * This parameter is required.
     *
     * @example f4a0dc8e-1702-4728-9a60-95b27a35****
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The operating system (OS) of the device that runs an Alibaba Cloud Workspace client.
     *
     * @example Windows_NT 10.0.1**** x64
     *
     * @var string
     */
    public $clientOS;

    /**
     * @description The type of Alibaba Cloud Workspace clients.
     *
     * Valid values:
     *
     *   HTML5: web client.
     *
     *   WINDOWS: Windows client.
     *
     *   MACOS: macOS client.
     *
     *   IOS: iOS client.
     *
     *   ANDROID: Android client.
     *
     * @example Windows
     *
     * @var string
     */
    public $clientType;

    /**
     * @description The version of the client. When you use an Alibaba Cloud Workspace client, you can view the client version in the **About** dialog box on the client logon page.
     *
     * @example 2.1.0-R-20210731.1****
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The logon authentication stage. Valid values:
     *
     *   `ADPassword`: the stage to verify the identity of the Active Directory (AD) user. You must specify the value when the system verifies the identity of a convenience account or an AD account.
     *   `MFABind: the stage to bind a virtual multi-factor authentication (MFA) device.`
     *   `MFAVerify: the stage to verify the verification code that is generated by the virtual MFA device.`
     *   `TokenVerify`: the stage to perform two-factor authentication on an Alibaba Cloud Workspace client (hereinafter referred to as the client).
     *   `ChangePassword`: the stage to change the password of the user.
     *   `KeepAliveVerify`: the stage to obtain LoginToken if KeepAliveToken is valid.
     *
     * @example ADPassword
     *
     * @var string
     */
    public $currentStage;

    /**
     * @description The office network ID. This parameter has the same meaning as `OfficeSiteId`. We recommend that you replace `DirectoryId` with `OfficeSiteId`. You can specify a value for `DirectoryId` or `OfficeSiteId`.
     *
     * @example cn-hangzhou+dir-885351****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The name of the convenience user or the AD user. This parameter is required if you set `CurrentStage` to `ADPassword`.
     *
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description Specifies whether to keep the user logged on to the client.
     * Valid values:
     * null: Default value. Do not keep the user logged on to the client.
     * true: Keep the user logged on to the client.
     * false:  Do not keep the user logged on to the client.
     *
     * @example false
     *
     * @var bool
     */
    public $keepAlive;

    /**
     * @description The token to keep logging on to an Alibaba Cloud Workspace client. When an end user logs on to the Alibaba Cloud Workspace client and select Auto Sign-in, `KeepAliveToken` is returned after you call this operation. Within the valid period of the returned token``, you can call the `GetLoginToken` operation and set `CurrentStage` to `KeepAliveVerify`. Then, you can obtain LoginToken. If you set `CurrentStage` to `KeepAliveVerify`, `KeepAliveToken` is required.
     *
     * @example hide
     *
     * @var string
     */
    public $keepAliveToken;

    /**
     * @description The new password. This parameter is required if you set `CurrentStage` to `ChangePassword`.
     *
     * @example NewPassword
     *
     * @var string
     */
    public $newPassword;

    /**
     * @description The office network ID.
     *
     * @example cn-hangzhou+dir-885351****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The current password. This parameter is required if you set `CurrentStage` to `ChangePassword`.
     *
     * @example OldPassword
     *
     * @var string
     */
    public $oldPassword;

    /**
     * @description The password of the convenience user or the AD user. This parameter is required if you set `CurrentStage` to `ADPassword`.
     *
     * @example Password1234
     *
     * @var string
     */
    public $password;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the regions supported by EDS.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the session.
     *
     *   If the virtual multi-factor authentication (MFA) device is not bound or two-factor authentication is not enabled for the client, you do not need to specify a value for `SessionId`.
     *   If the virtual MFA device is not bound or two-factor authentication is enabled for the client, you must specify a value for `SessionId` to verify the user identity after you specify a value for `ADPassword`. The value of the `SessionId` parameter is returned only if the CurrentStage parameter is set to `ADPassword` when you call the `GetLoginToken` operation.
     *
     * @example cd45e873-650d-4d70-acb9-f996187a****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description If two-factor authentication is enabled for Alibaba Cloud Workspace terminals in the EDS console and the system detects that the current logon user is exposed to risks, the system sends a verification code to the email address of the user. This parameter is required if you set `CurrentStage` to `TokenVerify`.
     *
     * @example 63****
     *
     * @var string
     */
    public $tokenCode;

    /**
     * @description The unique identifier of the client. When you use an Alibaba Cloud Workspace client, you can view the client version in the **About** dialog box on the client logon page.
     *
     * @example C78CA9E99315687575DD2844C1F3****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'authenticationCode' => 'AuthenticationCode',
        'availableFeaturesShrink' => 'AvailableFeatures',
        'clientId' => 'ClientId',
        'clientOS' => 'ClientOS',
        'clientType' => 'ClientType',
        'clientVersion' => 'ClientVersion',
        'currentStage' => 'CurrentStage',
        'directoryId' => 'DirectoryId',
        'endUserId' => 'EndUserId',
        'keepAlive' => 'KeepAlive',
        'keepAliveToken' => 'KeepAliveToken',
        'newPassword' => 'NewPassword',
        'officeSiteId' => 'OfficeSiteId',
        'oldPassword' => 'OldPassword',
        'password' => 'Password',
        'regionId' => 'RegionId',
        'sessionId' => 'SessionId',
        'tokenCode' => 'TokenCode',
        'uuid' => 'Uuid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authenticationCode) {
            $res['AuthenticationCode'] = $this->authenticationCode;
        }
        if (null !== $this->availableFeaturesShrink) {
            $res['AvailableFeatures'] = $this->availableFeaturesShrink;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientOS) {
            $res['ClientOS'] = $this->clientOS;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->currentStage) {
            $res['CurrentStage'] = $this->currentStage;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->keepAlive) {
            $res['KeepAlive'] = $this->keepAlive;
        }
        if (null !== $this->keepAliveToken) {
            $res['KeepAliveToken'] = $this->keepAliveToken;
        }
        if (null !== $this->newPassword) {
            $res['NewPassword'] = $this->newPassword;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->oldPassword) {
            $res['OldPassword'] = $this->oldPassword;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->tokenCode) {
            $res['TokenCode'] = $this->tokenCode;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLoginTokenShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthenticationCode'])) {
            $model->authenticationCode = $map['AuthenticationCode'];
        }
        if (isset($map['AvailableFeatures'])) {
            $model->availableFeaturesShrink = $map['AvailableFeatures'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientOS'])) {
            $model->clientOS = $map['ClientOS'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['CurrentStage'])) {
            $model->currentStage = $map['CurrentStage'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['KeepAlive'])) {
            $model->keepAlive = $map['KeepAlive'];
        }
        if (isset($map['KeepAliveToken'])) {
            $model->keepAliveToken = $map['KeepAliveToken'];
        }
        if (isset($map['NewPassword'])) {
            $model->newPassword = $map['NewPassword'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OldPassword'])) {
            $model->oldPassword = $map['OldPassword'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['TokenCode'])) {
            $model->tokenCode = $map['TokenCode'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
