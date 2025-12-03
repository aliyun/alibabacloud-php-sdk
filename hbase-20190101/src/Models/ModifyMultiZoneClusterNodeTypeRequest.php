<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Dara\Model;

class ModifyMultiZoneClusterNodeTypeRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $coreInstanceType;

    /**
     * @var string
     */
    public $logInstanceType;

    /**
     * @var string
     */
    public $masterInstanceType;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'coreInstanceType' => 'CoreInstanceType',
        'logInstanceType' => 'LogInstanceType',
        'masterInstanceType' => 'MasterInstanceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->coreInstanceType) {
            $res['CoreInstanceType'] = $this->coreInstanceType;
        }

        if (null !== $this->logInstanceType) {
            $res['LogInstanceType'] = $this->logInstanceType;
        }

        if (null !== $this->masterInstanceType) {
            $res['MasterInstanceType'] = $this->masterInstanceType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CoreInstanceType'])) {
            $model->coreInstanceType = $map['CoreInstanceType'];
        }

        if (isset($map['LogInstanceType'])) {
            $model->logInstanceType = $map['LogInstanceType'];
        }

        if (isset($map['MasterInstanceType'])) {
            $model->masterInstanceType = $map['MasterInstanceType'];
        }

        return $model;
    }
}
