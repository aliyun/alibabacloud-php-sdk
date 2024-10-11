<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class DetachDbfsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example i-bp67acfmxazb4ph***
     *
     * @var string
     */
    public $ECSInstanceId;

    /**
     * @description This parameter is required.
     *
     * @example d-bp131n0q38u3a4zi*****
     *
     * @var string
     */
    public $fsId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ECSInstanceId' => 'ECSInstanceId',
        'fsId'          => 'FsId',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ECSInstanceId) {
            $res['ECSInstanceId'] = $this->ECSInstanceId;
        }
        if (null !== $this->fsId) {
            $res['FsId'] = $this->fsId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachDbfsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ECSInstanceId'])) {
            $model->ECSInstanceId = $map['ECSInstanceId'];
        }
        if (isset($map['FsId'])) {
            $model->fsId = $map['FsId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
