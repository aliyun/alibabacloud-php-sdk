<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody\data;

use AlibabaCloud\Dara\Model;

class sensitivityList extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $inventory;

    /**
     * @var string[]
     */
    public $reductionList;

    /**
     * @var float
     */
    public $sensitivity;
    protected $_name = [
        'id' => 'id',
        'inventory' => 'inventory',
        'reductionList' => 'reductionList',
        'sensitivity' => 'sensitivity',
    ];

    public function validate()
    {
        if (\is_array($this->reductionList)) {
            Model::validateArray($this->reductionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->inventory) {
            $res['inventory'] = $this->inventory;
        }

        if (null !== $this->reductionList) {
            if (\is_array($this->reductionList)) {
                $res['reductionList'] = [];
                $n1 = 0;
                foreach ($this->reductionList as $item1) {
                    $res['reductionList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sensitivity) {
            $res['sensitivity'] = $this->sensitivity;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['inventory'])) {
            $model->inventory = $map['inventory'];
        }

        if (isset($map['reductionList'])) {
            if (!empty($map['reductionList'])) {
                $model->reductionList = [];
                $n1 = 0;
                foreach ($map['reductionList'] as $item1) {
                    $model->reductionList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['sensitivity'])) {
            $model->sensitivity = $map['sensitivity'];
        }

        return $model;
    }
}
