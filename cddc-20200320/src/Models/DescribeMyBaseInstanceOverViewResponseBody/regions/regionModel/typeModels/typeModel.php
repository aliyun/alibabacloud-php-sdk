<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseInstanceOverViewResponseBody\regions\regionModel\typeModels;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseInstanceOverViewResponseBody\regions\regionModel\typeModels\typeModel\instanceModels;
use AlibabaCloud\Tea\Model;

class typeModel extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $instanceDateType;

    /**
     * @var string
     */
    public $instanceEngineCount;

    /**
     * @var instanceModels
     */
    public $instanceModels;
    protected $_name = [
        'count'               => 'Count',
        'instanceDateType'    => 'InstanceDateType',
        'instanceEngineCount' => 'InstanceEngineCount',
        'instanceModels'      => 'InstanceModels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->instanceDateType) {
            $res['InstanceDateType'] = $this->instanceDateType;
        }
        if (null !== $this->instanceEngineCount) {
            $res['InstanceEngineCount'] = $this->instanceEngineCount;
        }
        if (null !== $this->instanceModels) {
            $res['InstanceModels'] = null !== $this->instanceModels ? $this->instanceModels->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return typeModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['InstanceDateType'])) {
            $model->instanceDateType = $map['InstanceDateType'];
        }
        if (isset($map['InstanceEngineCount'])) {
            $model->instanceEngineCount = $map['InstanceEngineCount'];
        }
        if (isset($map['InstanceModels'])) {
            $model->instanceModels = instanceModels::fromMap($map['InstanceModels']);
        }

        return $model;
    }
}
