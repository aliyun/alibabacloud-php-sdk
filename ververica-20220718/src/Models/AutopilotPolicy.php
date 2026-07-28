<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy\advancedRules;
use AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy\limits;
use AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy\scaleDownRules;
use AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy\scaleUpRules;
use AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy\silentPeriodConfig;

class AutopilotPolicy extends Model
{
    /**
     * @var advancedRules
     */
    public $advancedRules;

    /**
     * @var limits
     */
    public $limits;

    /**
     * @var scaleDownRules
     */
    public $scaleDownRules;

    /**
     * @var scaleUpRules
     */
    public $scaleUpRules;

    /**
     * @var silentPeriodConfig
     */
    public $silentPeriodConfig;
    protected $_name = [
        'advancedRules' => 'advancedRules',
        'limits' => 'limits',
        'scaleDownRules' => 'scaleDownRules',
        'scaleUpRules' => 'scaleUpRules',
        'silentPeriodConfig' => 'silentPeriodConfig',
    ];

    public function validate()
    {
        if (null !== $this->advancedRules) {
            $this->advancedRules->validate();
        }
        if (null !== $this->limits) {
            $this->limits->validate();
        }
        if (null !== $this->scaleDownRules) {
            $this->scaleDownRules->validate();
        }
        if (null !== $this->scaleUpRules) {
            $this->scaleUpRules->validate();
        }
        if (null !== $this->silentPeriodConfig) {
            $this->silentPeriodConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedRules) {
            $res['advancedRules'] = null !== $this->advancedRules ? $this->advancedRules->toArray($noStream) : $this->advancedRules;
        }

        if (null !== $this->limits) {
            $res['limits'] = null !== $this->limits ? $this->limits->toArray($noStream) : $this->limits;
        }

        if (null !== $this->scaleDownRules) {
            $res['scaleDownRules'] = null !== $this->scaleDownRules ? $this->scaleDownRules->toArray($noStream) : $this->scaleDownRules;
        }

        if (null !== $this->scaleUpRules) {
            $res['scaleUpRules'] = null !== $this->scaleUpRules ? $this->scaleUpRules->toArray($noStream) : $this->scaleUpRules;
        }

        if (null !== $this->silentPeriodConfig) {
            $res['silentPeriodConfig'] = null !== $this->silentPeriodConfig ? $this->silentPeriodConfig->toArray($noStream) : $this->silentPeriodConfig;
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
        if (isset($map['advancedRules'])) {
            $model->advancedRules = advancedRules::fromMap($map['advancedRules']);
        }

        if (isset($map['limits'])) {
            $model->limits = limits::fromMap($map['limits']);
        }

        if (isset($map['scaleDownRules'])) {
            $model->scaleDownRules = scaleDownRules::fromMap($map['scaleDownRules']);
        }

        if (isset($map['scaleUpRules'])) {
            $model->scaleUpRules = scaleUpRules::fromMap($map['scaleUpRules']);
        }

        if (isset($map['silentPeriodConfig'])) {
            $model->silentPeriodConfig = silentPeriodConfig::fromMap($map['silentPeriodConfig']);
        }

        return $model;
    }
}
