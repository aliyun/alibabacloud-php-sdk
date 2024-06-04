<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class RebootDesktopsRequest extends Model
{
    /**
     * @description The client ID. The system generates a unique ID for each client.
     *
     * This parameter is required.
     * @example f4a0dc8e-1702-4728-9a60-95b27a35****
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The operating system (OS) of the device that runs the Alibaba Cloud Workspace client (hereinafter referred to as WUYING client).
     *
     * @example Windows_NT 10.0.18363 x64
     *
     * @var string
     */
    public $clientOS;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How do I ensure the idempotence of a request?](https://help.aliyun.com/document_detail/25693.html)
     *
     * @example 40401e62-5caf-4508-8de7-bf98af12****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The client version. If you use a WUYING client, you can view the client version in the **About** dialog box on the client logon page.
     *
     * @example 2.1.0-R-20210731.151756
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The IDs of the cloud computers. You can specify the IDs of 1 to 20 cloud computers.
     *
     * This parameter is required.
     * @example ecd-7w78ozhjcwa3u****
     *
     * @var string[]
     */
    public $desktopId;

    /**
     * @description The logon token.
     *
     * @example v18101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****
     *
     * @var string
     */
    public $loginToken;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the regions supported by WUYING Workspace.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The session ID.
     *
     * @example cd45e873-650d-4d70-acb9-f996187a****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description The logon token.
     *
     * @example 04b7b80a0b020715c5c1b4175fc4771698****9e2a759557a4624665fd53ae40
     *
     * @var string
     */
    public $sessionToken;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'clientId'      => 'ClientId',
        'clientOS'      => 'ClientOS',
        'clientToken'   => 'ClientToken',
        'clientVersion' => 'ClientVersion',
        'desktopId'     => 'DesktopId',
        'loginToken'    => 'LoginToken',
        'regionId'      => 'RegionId',
        'sessionId'     => 'SessionId',
        'sessionToken'  => 'SessionToken',
        'uuid'          => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientOS) {
            $res['ClientOS'] = $this->clientOS;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
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
        if (null !== $this->sessionToken) {
            $res['SessionToken'] = $this->sessionToken;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RebootDesktopsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientOS'])) {
            $model->clientOS = $map['ClientOS'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = $map['DesktopId'];
            }
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
        if (isset($map['SessionToken'])) {
            $model->sessionToken = $map['SessionToken'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
