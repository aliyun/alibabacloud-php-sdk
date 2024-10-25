<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudDiskTypesRequest extends Model
{
    /**
     * @description The ID of the edge node.
     *
     * @example cn-chongqing-cmcc
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string[]
     */
    public $ensRegionIds;
    protected $_name = [
        'ensRegionId'  => 'EnsRegionId',
        'ensRegionIds' => 'EnsRegionIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->ensRegionIds) {
            $res['EnsRegionIds'] = $this->ensRegionIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudDiskTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['EnsRegionIds'])) {
            if (!empty($map['EnsRegionIds'])) {
                $model->ensRegionIds = $map['EnsRegionIds'];
            }
        }

        return $model;
    }
}
