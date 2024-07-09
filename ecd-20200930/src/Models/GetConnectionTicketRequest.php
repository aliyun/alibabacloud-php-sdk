<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetConnectionTicketRequest extends Model
{
    /**
     * @description The command that you want to run to configure a custom application in user mode. After you obtain the credential, the application is automatically started. Parameter description in the command:
     *
     *   appPath: the path of the application startup file. Example: `"C:\\\\Program Files (x86)\\\\000\\\\000.exe"`. Use double slashes (\\\\\\) as the delimiter. Type of the parameter value: string.
     *   appParameter: the startup arguments of the application. Example: `"meetingid 000 meetingname aaa"`. Separate multiple arguments with spaces. Type of the parameter value: string.
     *
     * @example {
     * }
     * @var string
     */
    public $commandContent;

    /**
     * @description The ID of the cloud computer for which you want to generate a connection credential. This parameter is required.
     *
     * @example ecd-gx2x1dhsmucyy****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The ID of the end user of the cloud computer. The end user must be the current end user of the cloud computer.
     *
     * @example Alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The password of the current end user of the cloud computer.
     *
     * @example Ab123456
     *
     * @var string
     */
    public $password;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the cloud computer connection task.
     *
     * @example 2afbad19-778a-4fc5-9674-1f19c63862da
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The unique identifier of the client. If you use an Alibaba Cloud Workspace client, click **About** on the client logon page to view the identifier of the client.
     *
     * @example 28c80e90-f71e-4c23-93d6-1225329cf949
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'commandContent'       => 'CommandContent',
        'desktopId'            => 'DesktopId',
        'endUserId'            => 'EndUserId',
        'ownerId'              => 'OwnerId',
        'password'             => 'Password',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'taskId'               => 'TaskId',
        'uuid'                 => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConnectionTicketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
