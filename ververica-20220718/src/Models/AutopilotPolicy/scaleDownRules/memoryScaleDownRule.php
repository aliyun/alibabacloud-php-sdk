<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy\scaleDownRules;

use AlibabaCloud\Dara\Model;

class memoryScaleDownRule extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $memUsageScaleDownSampleInterval;

    /**
     * @var float
     */
    public $memUsageScaleDownThreshold;
    protected $_name = [
        'enabled' => 'enabled',
        'memUsageScaleDownSampleInterval' => 'memUsageScaleDownSampleInterval',
        'memUsageScaleDownThreshold' => 'memUsageScaleDownThreshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->memUsageScaleDownSampleInterval) {
            $res['memUsageScaleDownSampleInterval'] = $this->memUsageScaleDownSampleInterval;
        }

        if (null !== $this->memUsageScaleDownThreshold) {
            $res['memUsageScaleDownThreshold'] = $this->memUsageScaleDownThreshold;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['memUsageScaleDownSampleInterval'])) {
            $model->memUsageScaleDownSampleInterval = $map['memUsageScaleDownSampleInterval'];
        }

        if (isset($map['memUsageScaleDownThreshold'])) {
            $model->memUsageScaleDownThreshold = $map['memUsageScaleDownThreshold'];
        }

        return $model;
    }
}
