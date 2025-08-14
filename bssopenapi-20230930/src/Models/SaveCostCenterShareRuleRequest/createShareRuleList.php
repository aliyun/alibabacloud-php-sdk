<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SaveCostCenterShareRuleRequest;

use AlibabaCloud\Dara\Model;

class createShareRuleList extends Model
{
    /**
     * @var int[]
     */
    public $fromCostCenterList;

    /**
     * @var float[]
     */
    public $shareRatioList;

    /**
     * @var string
     */
    public $shareRuleName;

    /**
     * @var string
     */
    public $shareType;

    /**
     * @var int[]
     */
    public $toCostCenterList;
    protected $_name = [
        'fromCostCenterList' => 'FromCostCenterList',
        'shareRatioList' => 'ShareRatioList',
        'shareRuleName' => 'ShareRuleName',
        'shareType' => 'ShareType',
        'toCostCenterList' => 'ToCostCenterList',
    ];

    public function validate()
    {
        if (\is_array($this->fromCostCenterList)) {
            Model::validateArray($this->fromCostCenterList);
        }
        if (\is_array($this->shareRatioList)) {
            Model::validateArray($this->shareRatioList);
        }
        if (\is_array($this->toCostCenterList)) {
            Model::validateArray($this->toCostCenterList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromCostCenterList) {
            if (\is_array($this->fromCostCenterList)) {
                $res['FromCostCenterList'] = [];
                $n1 = 0;
                foreach ($this->fromCostCenterList as $item1) {
                    $res['FromCostCenterList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->shareRatioList) {
            if (\is_array($this->shareRatioList)) {
                $res['ShareRatioList'] = [];
                $n1 = 0;
                foreach ($this->shareRatioList as $item1) {
                    $res['ShareRatioList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->shareRuleName) {
            $res['ShareRuleName'] = $this->shareRuleName;
        }

        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }

        if (null !== $this->toCostCenterList) {
            if (\is_array($this->toCostCenterList)) {
                $res['ToCostCenterList'] = [];
                $n1 = 0;
                foreach ($this->toCostCenterList as $item1) {
                    $res['ToCostCenterList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['FromCostCenterList'])) {
            if (!empty($map['FromCostCenterList'])) {
                $model->fromCostCenterList = [];
                $n1 = 0;
                foreach ($map['FromCostCenterList'] as $item1) {
                    $model->fromCostCenterList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ShareRatioList'])) {
            if (!empty($map['ShareRatioList'])) {
                $model->shareRatioList = [];
                $n1 = 0;
                foreach ($map['ShareRatioList'] as $item1) {
                    $model->shareRatioList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ShareRuleName'])) {
            $model->shareRuleName = $map['ShareRuleName'];
        }

        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }

        if (isset($map['ToCostCenterList'])) {
            if (!empty($map['ToCostCenterList'])) {
                $model->toCostCenterList = [];
                $n1 = 0;
                foreach ($map['ToCostCenterList'] as $item1) {
                    $model->toCostCenterList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
