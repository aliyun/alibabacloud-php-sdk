<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeEnsRegionIdIpv6InfoRequest extends Model
{
    /**
     * @description The ID of the node. You can specify only one node ID in a call.
     *
     * This parameter is required.
     *
     * @example cn-chengdu-xxxx-4
     *
     * @var string
     */
    public $ensRegionId;
    protected $_name = [
        'ensRegionId' => 'EnsRegionId',
    ];

    public function validate() {}

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
     * @return DescribeEnsRegionIdIpv6InfoRequest
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
