<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ModifyAccessPointRequest extends Model
{
    /**
     * @description The name of the permission group.
     *
     * The default permission group for virtual private clouds (VPCs) is named DEFAULT_VPC_GROUP_NAME.
     * @example DEFAULT_VPC_GROUP_NAME
     *
     * @var string
     */
    public $accessGroup;

    /**
     * @description The ID of the access point.
     *
     * This parameter is required.
     * @example ap-ie15yd****
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @description The name of the access point.
     *
     * @example test
     *
     * @var string
     */
    public $accessPointName;

    /**
     * @description Specifies whether to enable the Resource Access Management (RAM) policy. Valid values:
     *
     *   true: The RAM policy is enabled.
     *   false (default): The RAM policy is disabled.
     *
     * >  After the RAM policy is enabled for access points, no RAM user is allowed to use access points to mount and access data by default. To use access points to mount and access data as a RAM user, you must grant the related access permissions to the RAM user. If the RAM policy is disabled, access points can be anonymously mounted.
     * @example false
     *
     * @var bool
     */
    public $enabledRam;

    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     * @example 1ca404****
     *
     * @var string
     */
    public $fileSystemId;
    protected $_name = [
        'accessGroup'     => 'AccessGroup',
        'accessPointId'   => 'AccessPointId',
        'accessPointName' => 'AccessPointName',
        'enabledRam'      => 'EnabledRam',
        'fileSystemId'    => 'FileSystemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroup) {
            $res['AccessGroup'] = $this->accessGroup;
        }
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->accessPointName) {
            $res['AccessPointName'] = $this->accessPointName;
        }
        if (null !== $this->enabledRam) {
            $res['EnabledRam'] = $this->enabledRam;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAccessPointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroup'])) {
            $model->accessGroup = $map['AccessGroup'];
        }
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['AccessPointName'])) {
            $model->accessPointName = $map['AccessPointName'];
        }
        if (isset($map['EnabledRam'])) {
            $model->enabledRam = $map['EnabledRam'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        return $model;
    }
}
