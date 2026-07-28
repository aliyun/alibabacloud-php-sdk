<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy\scaleUpRules;

use AlibabaCloud\Dara\Model;

class gcRule extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $gcSampleInterval;

    /**
     * @var float
     */
    public $gcTimeRatioThreshold;
    protected $_name = [
        'enabled' => 'enabled',
        'gcSampleInterval' => 'gcSampleInterval',
        'gcTimeRatioThreshold' => 'gcTimeRatioThreshold',
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

        if (null !== $this->gcSampleInterval) {
            $res['gcSampleInterval'] = $this->gcSampleInterval;
        }

        if (null !== $this->gcTimeRatioThreshold) {
            $res['gcTimeRatioThreshold'] = $this->gcTimeRatioThreshold;
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

        if (isset($map['gcSampleInterval'])) {
            $model->gcSampleInterval = $map['gcSampleInterval'];
        }

        if (isset($map['gcTimeRatioThreshold'])) {
            $model->gcTimeRatioThreshold = $map['gcTimeRatioThreshold'];
        }

        return $model;
    }
}
