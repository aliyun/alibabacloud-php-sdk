<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterShareRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterShareRuleResponseBody\data\fromCostCenterShareRuleDetails;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterShareRuleResponseBody\data\toCostCenterShareRuleDetails;

class data extends Model
{
    /**
     * @var fromCostCenterShareRuleDetails[]
     */
    public $fromCostCenterShareRuleDetails;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $ownerAccountId;

    /**
     * @var int
     */
    public $shareRuleId;

    /**
     * @var string
     */
    public $shareRuleName;

    /**
     * @var string
     */
    public $shareRuleType;

    /**
     * @var toCostCenterShareRuleDetails[]
     */
    public $toCostCenterShareRuleDetails;
    protected $_name = [
        'fromCostCenterShareRuleDetails' => 'FromCostCenterShareRuleDetails',
        'gmtModified' => 'GmtModified',
        'ownerAccountId' => 'OwnerAccountId',
        'shareRuleId' => 'ShareRuleId',
        'shareRuleName' => 'ShareRuleName',
        'shareRuleType' => 'ShareRuleType',
        'toCostCenterShareRuleDetails' => 'ToCostCenterShareRuleDetails',
    ];

    public function validate()
    {
        if (\is_array($this->fromCostCenterShareRuleDetails)) {
            Model::validateArray($this->fromCostCenterShareRuleDetails);
        }
        if (\is_array($this->toCostCenterShareRuleDetails)) {
            Model::validateArray($this->toCostCenterShareRuleDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromCostCenterShareRuleDetails) {
            if (\is_array($this->fromCostCenterShareRuleDetails)) {
                $res['FromCostCenterShareRuleDetails'] = [];
                $n1 = 0;
                foreach ($this->fromCostCenterShareRuleDetails as $item1) {
                    $res['FromCostCenterShareRuleDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->ownerAccountId) {
            $res['OwnerAccountId'] = $this->ownerAccountId;
        }

        if (null !== $this->shareRuleId) {
            $res['ShareRuleId'] = $this->shareRuleId;
        }

        if (null !== $this->shareRuleName) {
            $res['ShareRuleName'] = $this->shareRuleName;
        }

        if (null !== $this->shareRuleType) {
            $res['ShareRuleType'] = $this->shareRuleType;
        }

        if (null !== $this->toCostCenterShareRuleDetails) {
            if (\is_array($this->toCostCenterShareRuleDetails)) {
                $res['ToCostCenterShareRuleDetails'] = [];
                $n1 = 0;
                foreach ($this->toCostCenterShareRuleDetails as $item1) {
                    $res['ToCostCenterShareRuleDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FromCostCenterShareRuleDetails'])) {
            if (!empty($map['FromCostCenterShareRuleDetails'])) {
                $model->fromCostCenterShareRuleDetails = [];
                $n1 = 0;
                foreach ($map['FromCostCenterShareRuleDetails'] as $item1) {
                    $model->fromCostCenterShareRuleDetails[$n1] = fromCostCenterShareRuleDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['OwnerAccountId'])) {
            $model->ownerAccountId = $map['OwnerAccountId'];
        }

        if (isset($map['ShareRuleId'])) {
            $model->shareRuleId = $map['ShareRuleId'];
        }

        if (isset($map['ShareRuleName'])) {
            $model->shareRuleName = $map['ShareRuleName'];
        }

        if (isset($map['ShareRuleType'])) {
            $model->shareRuleType = $map['ShareRuleType'];
        }

        if (isset($map['ToCostCenterShareRuleDetails'])) {
            if (!empty($map['ToCostCenterShareRuleDetails'])) {
                $model->toCostCenterShareRuleDetails = [];
                $n1 = 0;
                foreach ($map['ToCostCenterShareRuleDetails'] as $item1) {
                    $model->toCostCenterShareRuleDetails[$n1] = toCostCenterShareRuleDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
