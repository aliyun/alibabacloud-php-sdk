<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudDiskTypesShrinkRequest extends Model
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
     * @description The edge nodes.
     *
     * @var string
     */
    public $ensRegionIdsShrink;
    protected $_name = [
        'ensRegionId' => 'EnsRegionId',
        'ensRegionIdsShrink' => 'EnsRegionIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->ensRegionIdsShrink) {
            $res['EnsRegionIds'] = $this->ensRegionIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudDiskTypesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['EnsRegionIds'])) {
            $model->ensRegionIdsShrink = $map['EnsRegionIds'];
        }

        return $model;
    }
}
