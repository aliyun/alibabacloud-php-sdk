<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy\scaleUpRules;

use AlibabaCloud\Dara\Model;

class delayRule extends Model
{
    /**
     * @var string
     */
    public $delaySampleInterval;

    /**
     * @var string
     */
    public $delayThreshold;

    /**
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'delaySampleInterval' => 'delaySampleInterval',
        'delayThreshold' => 'delayThreshold',
        'enabled' => 'enabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delaySampleInterval) {
            $res['delaySampleInterval'] = $this->delaySampleInterval;
        }

        if (null !== $this->delayThreshold) {
            $res['delayThreshold'] = $this->delayThreshold;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
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
        if (isset($map['delaySampleInterval'])) {
            $model->delaySampleInterval = $map['delaySampleInterval'];
        }

        if (isset($map['delayThreshold'])) {
            $model->delayThreshold = $map['delayThreshold'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        return $model;
    }
}
