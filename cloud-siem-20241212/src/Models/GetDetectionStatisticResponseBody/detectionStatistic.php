<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDetectionStatisticResponseBody;

use AlibabaCloud\Dara\Model;

class detectionStatistic extends Model
{
    /**
     * @var int
     */
    public $detectionRuleOnlineCount;

    /**
     * @var int
     */
    public $detectionRuleTemplateCount;

    /**
     * @var int
     */
    public $detectionRuleTestCount;

    /**
     * @var int
     */
    public $graphComputeRuleCount;

    /**
     * @var int
     */
    public $passthroughRuleCount;

    /**
     * @var int
     */
    public $windowRuleCount;
    protected $_name = [
        'detectionRuleOnlineCount' => 'DetectionRuleOnlineCount',
        'detectionRuleTemplateCount' => 'DetectionRuleTemplateCount',
        'detectionRuleTestCount' => 'DetectionRuleTestCount',
        'graphComputeRuleCount' => 'GraphComputeRuleCount',
        'passthroughRuleCount' => 'PassthroughRuleCount',
        'windowRuleCount' => 'WindowRuleCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detectionRuleOnlineCount) {
            $res['DetectionRuleOnlineCount'] = $this->detectionRuleOnlineCount;
        }

        if (null !== $this->detectionRuleTemplateCount) {
            $res['DetectionRuleTemplateCount'] = $this->detectionRuleTemplateCount;
        }

        if (null !== $this->detectionRuleTestCount) {
            $res['DetectionRuleTestCount'] = $this->detectionRuleTestCount;
        }

        if (null !== $this->graphComputeRuleCount) {
            $res['GraphComputeRuleCount'] = $this->graphComputeRuleCount;
        }

        if (null !== $this->passthroughRuleCount) {
            $res['PassthroughRuleCount'] = $this->passthroughRuleCount;
        }

        if (null !== $this->windowRuleCount) {
            $res['WindowRuleCount'] = $this->windowRuleCount;
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
        if (isset($map['DetectionRuleOnlineCount'])) {
            $model->detectionRuleOnlineCount = $map['DetectionRuleOnlineCount'];
        }

        if (isset($map['DetectionRuleTemplateCount'])) {
            $model->detectionRuleTemplateCount = $map['DetectionRuleTemplateCount'];
        }

        if (isset($map['DetectionRuleTestCount'])) {
            $model->detectionRuleTestCount = $map['DetectionRuleTestCount'];
        }

        if (isset($map['GraphComputeRuleCount'])) {
            $model->graphComputeRuleCount = $map['GraphComputeRuleCount'];
        }

        if (isset($map['PassthroughRuleCount'])) {
            $model->passthroughRuleCount = $map['PassthroughRuleCount'];
        }

        if (isset($map['WindowRuleCount'])) {
            $model->windowRuleCount = $map['WindowRuleCount'];
        }

        return $model;
    }
}
