<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeCostRulesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $cacheCostPointsPerMillion;

    /**
     * @var string
     */
    public $costRuleId;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $gwClusterId;

    /**
     * @var string
     */
    public $inputCostPointsPerMillion;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $modelServiceId;

    /**
     * @var string
     */
    public $outputCostPointsPerMillion;
    protected $_name = [
        'cacheCostPointsPerMillion' => 'CacheCostPointsPerMillion',
        'costRuleId' => 'CostRuleId',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'gwClusterId' => 'GwClusterId',
        'inputCostPointsPerMillion' => 'InputCostPointsPerMillion',
        'model' => 'Model',
        'modelServiceId' => 'ModelServiceId',
        'outputCostPointsPerMillion' => 'OutputCostPointsPerMillion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheCostPointsPerMillion) {
            $res['CacheCostPointsPerMillion'] = $this->cacheCostPointsPerMillion;
        }

        if (null !== $this->costRuleId) {
            $res['CostRuleId'] = $this->costRuleId;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->gwClusterId) {
            $res['GwClusterId'] = $this->gwClusterId;
        }

        if (null !== $this->inputCostPointsPerMillion) {
            $res['InputCostPointsPerMillion'] = $this->inputCostPointsPerMillion;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->modelServiceId) {
            $res['ModelServiceId'] = $this->modelServiceId;
        }

        if (null !== $this->outputCostPointsPerMillion) {
            $res['OutputCostPointsPerMillion'] = $this->outputCostPointsPerMillion;
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
        if (isset($map['CacheCostPointsPerMillion'])) {
            $model->cacheCostPointsPerMillion = $map['CacheCostPointsPerMillion'];
        }

        if (isset($map['CostRuleId'])) {
            $model->costRuleId = $map['CostRuleId'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['GwClusterId'])) {
            $model->gwClusterId = $map['GwClusterId'];
        }

        if (isset($map['InputCostPointsPerMillion'])) {
            $model->inputCostPointsPerMillion = $map['InputCostPointsPerMillion'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['ModelServiceId'])) {
            $model->modelServiceId = $map['ModelServiceId'];
        }

        if (isset($map['OutputCostPointsPerMillion'])) {
            $model->outputCostPointsPerMillion = $map['OutputCostPointsPerMillion'];
        }

        return $model;
    }
}
