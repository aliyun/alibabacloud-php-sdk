<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeEipAddressesRequest extends Model
{
    /**
     * @description The information about the EIPs.
     *
     * @example [\"eip-5rd9i3pftfgbavl4y1b7hm4a3\"]
     *
     * @var string
     */
    public $eips;

    /**
     * @description The ID of the Edge Node Service (ENS) node.
     *
     * @example cn-nanjing-cmcc
     *
     * @var string
     */
    public $ensRegionId;
    protected $_name = [
        'eips'        => 'Eips',
        'ensRegionId' => 'EnsRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eips) {
            $res['Eips'] = $this->eips;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEipAddressesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Eips'])) {
            $model->eips = $map['Eips'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        return $model;
    }
}
