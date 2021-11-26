<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\samplingMode\samplingModeAgents;
use AlibabaCloud\Tea\Model;

class samplingMode extends Model
{
    /**
     * @var int
     */
    public $anyNumberOfDraws;

    /**
     * @var bool
     */
    public $designated;

    /**
     * @var int
     */
    public $dimension;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $numberOfDraws;

    /**
     * @var float
     */
    public $proportion;

    /**
     * @var int
     */
    public $randomInspectionNumber;

    /**
     * @var samplingModeAgents
     */
    public $samplingModeAgents;
    protected $_name = [
        'anyNumberOfDraws'       => 'AnyNumberOfDraws',
        'designated'             => 'Designated',
        'dimension'              => 'Dimension',
        'limit'                  => 'Limit',
        'numberOfDraws'          => 'NumberOfDraws',
        'proportion'             => 'Proportion',
        'randomInspectionNumber' => 'RandomInspectionNumber',
        'samplingModeAgents'     => 'SamplingModeAgents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anyNumberOfDraws) {
            $res['AnyNumberOfDraws'] = $this->anyNumberOfDraws;
        }
        if (null !== $this->designated) {
            $res['Designated'] = $this->designated;
        }
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->numberOfDraws) {
            $res['NumberOfDraws'] = $this->numberOfDraws;
        }
        if (null !== $this->proportion) {
            $res['Proportion'] = $this->proportion;
        }
        if (null !== $this->randomInspectionNumber) {
            $res['RandomInspectionNumber'] = $this->randomInspectionNumber;
        }
        if (null !== $this->samplingModeAgents) {
            $res['SamplingModeAgents'] = null !== $this->samplingModeAgents ? $this->samplingModeAgents->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return samplingMode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnyNumberOfDraws'])) {
            $model->anyNumberOfDraws = $map['AnyNumberOfDraws'];
        }
        if (isset($map['Designated'])) {
            $model->designated = $map['Designated'];
        }
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NumberOfDraws'])) {
            $model->numberOfDraws = $map['NumberOfDraws'];
        }
        if (isset($map['Proportion'])) {
            $model->proportion = $map['Proportion'];
        }
        if (isset($map['RandomInspectionNumber'])) {
            $model->randomInspectionNumber = $map['RandomInspectionNumber'];
        }
        if (isset($map['SamplingModeAgents'])) {
            $model->samplingModeAgents = samplingModeAgents::fromMap($map['SamplingModeAgents']);
        }

        return $model;
    }
}
