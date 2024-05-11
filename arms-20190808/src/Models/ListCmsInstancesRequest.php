<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListCmsInstancesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example n9p9o9o3se
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example direct
     *
     * @var string
     */
    public $typeFilter;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'regionId'   => 'RegionId',
        'typeFilter' => 'TypeFilter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->typeFilter) {
            $res['TypeFilter'] = $this->typeFilter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCmsInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TypeFilter'])) {
            $model->typeFilter = $map['TypeFilter'];
        }

        return $model;
    }
}
