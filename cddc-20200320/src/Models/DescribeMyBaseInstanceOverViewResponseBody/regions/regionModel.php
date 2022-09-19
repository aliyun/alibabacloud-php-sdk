<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseInstanceOverViewResponseBody\regions;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseInstanceOverViewResponseBody\regions\regionModel\typeModels;
use AlibabaCloud\Tea\Model;

class regionModel extends Model
{
    /**
     * @var string
     */
    public $engineCount;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var typeModels
     */
    public $typeModels;
    protected $_name = [
        'engineCount' => 'EngineCount',
        'region'      => 'Region',
        'totalCount'  => 'TotalCount',
        'typeModels'  => 'TypeModels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engineCount) {
            $res['EngineCount'] = $this->engineCount;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->typeModels) {
            $res['TypeModels'] = null !== $this->typeModels ? $this->typeModels->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EngineCount'])) {
            $model->engineCount = $map['EngineCount'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TypeModels'])) {
            $model->typeModels = typeModels::fromMap($map['TypeModels']);
        }

        return $model;
    }
}
