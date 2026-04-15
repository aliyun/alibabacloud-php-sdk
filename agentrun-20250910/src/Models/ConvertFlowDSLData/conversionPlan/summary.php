<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\ConvertFlowDSLData\conversionPlan;

use AlibabaCloud\Dara\Model;

class summary extends Model
{
    /**
     * @var int
     */
    public $compatibleNodes;

    /**
     * @var int
     */
    public $nodesNeedConfig;

    /**
     * @var int
     */
    public $nodesNeedConversion;

    /**
     * @var int
     */
    public $totalNodes;

    /**
     * @var int
     */
    public $unsupportedNodes;
    protected $_name = [
        'compatibleNodes' => 'compatibleNodes',
        'nodesNeedConfig' => 'nodesNeedConfig',
        'nodesNeedConversion' => 'nodesNeedConversion',
        'totalNodes' => 'totalNodes',
        'unsupportedNodes' => 'unsupportedNodes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compatibleNodes) {
            $res['compatibleNodes'] = $this->compatibleNodes;
        }

        if (null !== $this->nodesNeedConfig) {
            $res['nodesNeedConfig'] = $this->nodesNeedConfig;
        }

        if (null !== $this->nodesNeedConversion) {
            $res['nodesNeedConversion'] = $this->nodesNeedConversion;
        }

        if (null !== $this->totalNodes) {
            $res['totalNodes'] = $this->totalNodes;
        }

        if (null !== $this->unsupportedNodes) {
            $res['unsupportedNodes'] = $this->unsupportedNodes;
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
        if (isset($map['compatibleNodes'])) {
            $model->compatibleNodes = $map['compatibleNodes'];
        }

        if (isset($map['nodesNeedConfig'])) {
            $model->nodesNeedConfig = $map['nodesNeedConfig'];
        }

        if (isset($map['nodesNeedConversion'])) {
            $model->nodesNeedConversion = $map['nodesNeedConversion'];
        }

        if (isset($map['totalNodes'])) {
            $model->totalNodes = $map['totalNodes'];
        }

        if (isset($map['unsupportedNodes'])) {
            $model->unsupportedNodes = $map['unsupportedNodes'];
        }

        return $model;
    }
}
