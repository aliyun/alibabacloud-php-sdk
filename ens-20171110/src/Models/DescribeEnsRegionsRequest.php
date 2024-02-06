<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeEnsRegionsRequest extends Model
{
    /**
     * @description The ID of the node.
     *
     * By default, all available node IDs are returned.
     * @example cn-dalian-unicom
     *
     * @var string
     */
    public $ensRegionId;
    protected $_name = [
        'ensRegionId' => 'EnsRegionId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnsRegionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        return $model;
    }
}
