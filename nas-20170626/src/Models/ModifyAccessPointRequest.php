<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ModifyAccessPointRequest extends Model
{
    /**
     * @example DEFAULT_VPC_GROUP_NAME
     *
     * @var string
     */
    public $accessGroup;

    /**
     * @description This parameter is required.
     *
     * @example ap-ie15yd****
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @example test
     *
     * @var string
     */
    public $accessPointName;

    /**
     * @example false
     *
     * @var bool
     */
    public $enabledRam;

    /**
     * @description This parameter is required.
     *
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
