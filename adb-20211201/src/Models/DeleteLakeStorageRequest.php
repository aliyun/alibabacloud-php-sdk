<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DeleteLakeStorageRequest extends Model
{
    /**
     * @example amv-bp*********
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description This parameter is required.
     *
     * @example -
     *
     * @var string
     */
    public $lakeStorageId;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBClusterId'   => 'DBClusterId',
        'lakeStorageId' => 'LakeStorageId',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->lakeStorageId) {
            $res['LakeStorageId'] = $this->lakeStorageId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLakeStorageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['LakeStorageId'])) {
            $model->lakeStorageId = $map['LakeStorageId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
