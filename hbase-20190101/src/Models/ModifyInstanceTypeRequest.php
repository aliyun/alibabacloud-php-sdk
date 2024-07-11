<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceTypeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example hb-bp1x940uh********
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example hbase.sn1.8xlarge
     *
     * @var string
     */
    public $coreInstanceType;

    /**
     * @example hbase.sn1.large
     *
     * @var string
     */
    public $masterInstanceType;
    protected $_name = [
        'clusterId'          => 'ClusterId',
        'coreInstanceType'   => 'CoreInstanceType',
        'masterInstanceType' => 'MasterInstanceType',
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
        if (null !== $this->coreInstanceType) {
            $res['CoreInstanceType'] = $this->coreInstanceType;
        }
        if (null !== $this->masterInstanceType) {
            $res['MasterInstanceType'] = $this->masterInstanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CoreInstanceType'])) {
            $model->coreInstanceType = $map['CoreInstanceType'];
        }
        if (isset($map['MasterInstanceType'])) {
            $model->masterInstanceType = $map['MasterInstanceType'];
        }

        return $model;
    }
}
