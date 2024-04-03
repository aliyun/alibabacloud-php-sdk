<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody\data;

use AlibabaCloud\Tea\Model;

class sensitivityList extends Model
{
    /**
     * @description Inventory id
     *
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @description Name of the inventory item.
     *
     * @example energy
     *
     * @var string
     */
    public $inventory;

    /**
     * @description List of emission reduction measures.
     *
     * @var string[]
     */
    public $reductionList;

    /**
     * @description Sensitivity percentage.
     *
     * @example 91.7
     *
     * @var float
     */
    public $sensitivity;
    protected $_name = [
        'id'            => 'id',
        'inventory'     => 'inventory',
        'reductionList' => 'reductionList',
        'sensitivity'   => 'sensitivity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->inventory) {
            $res['inventory'] = $this->inventory;
        }
        if (null !== $this->reductionList) {
            $res['reductionList'] = $this->reductionList;
        }
        if (null !== $this->sensitivity) {
            $res['sensitivity'] = $this->sensitivity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sensitivityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['inventory'])) {
            $model->inventory = $map['inventory'];
        }
        if (isset($map['reductionList'])) {
            if (!empty($map['reductionList'])) {
                $model->reductionList = $map['reductionList'];
            }
        }
        if (isset($map['sensitivity'])) {
            $model->sensitivity = $map['sensitivity'];
        }

        return $model;
    }
}
