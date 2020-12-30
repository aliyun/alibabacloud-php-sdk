<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ModifyMultiZoneClusterNodeTypeRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $masterInstanceType;

    /**
     * @var string
     */
    public $coreInstanceType;

    /**
     * @var string
     */
    public $logInstanceType;
    protected $_name = [
        'clusterId'          => 'ClusterId',
        'masterInstanceType' => 'MasterInstanceType',
        'coreInstanceType'   => 'CoreInstanceType',
        'logInstanceType'    => 'LogInstanceType',
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
        if (null !== $this->masterInstanceType) {
            $res['MasterInstanceType'] = $this->masterInstanceType;
        }
        if (null !== $this->coreInstanceType) {
            $res['CoreInstanceType'] = $this->coreInstanceType;
        }
        if (null !== $this->logInstanceType) {
            $res['LogInstanceType'] = $this->logInstanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyMultiZoneClusterNodeTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['MasterInstanceType'])) {
            $model->masterInstanceType = $map['MasterInstanceType'];
        }
        if (isset($map['CoreInstanceType'])) {
            $model->coreInstanceType = $map['CoreInstanceType'];
        }
        if (isset($map['LogInstanceType'])) {
            $model->logInstanceType = $map['LogInstanceType'];
        }

        return $model;
    }
}
