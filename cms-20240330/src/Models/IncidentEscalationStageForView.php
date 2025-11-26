<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class IncidentEscalationStageForView extends Model
{
    /**
     * @var int
     */
    public $cycleNotifyCount;

    /**
     * @var int
     */
    public $cycleNotifyInterval;

    /**
     * @var EffectTimeRange
     */
    public $effectTimeRange;

    /**
     * @var int
     */
    public $index;

    /**
     * @var NotifyChannel[]
     */
    public $notifyChannels;

    /**
     * @var string
     */
    public $targetIncidentState;

    /**
     * @var int
     */
    public $triggerDelay;
    protected $_name = [
        'cycleNotifyCount' => 'cycleNotifyCount',
        'cycleNotifyInterval' => 'cycleNotifyInterval',
        'effectTimeRange' => 'effectTimeRange',
        'index' => 'index',
        'notifyChannels' => 'notifyChannels',
        'targetIncidentState' => 'targetIncidentState',
        'triggerDelay' => 'triggerDelay',
    ];

    public function validate()
    {
        if (null !== $this->effectTimeRange) {
            $this->effectTimeRange->validate();
        }
        if (\is_array($this->notifyChannels)) {
            Model::validateArray($this->notifyChannels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cycleNotifyCount) {
            $res['cycleNotifyCount'] = $this->cycleNotifyCount;
        }

        if (null !== $this->cycleNotifyInterval) {
            $res['cycleNotifyInterval'] = $this->cycleNotifyInterval;
        }

        if (null !== $this->effectTimeRange) {
            $res['effectTimeRange'] = null !== $this->effectTimeRange ? $this->effectTimeRange->toArray($noStream) : $this->effectTimeRange;
        }

        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->notifyChannels) {
            if (\is_array($this->notifyChannels)) {
                $res['notifyChannels'] = [];
                $n1 = 0;
                foreach ($this->notifyChannels as $item1) {
                    $res['notifyChannels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetIncidentState) {
            $res['targetIncidentState'] = $this->targetIncidentState;
        }

        if (null !== $this->triggerDelay) {
            $res['triggerDelay'] = $this->triggerDelay;
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
        if (isset($map['cycleNotifyCount'])) {
            $model->cycleNotifyCount = $map['cycleNotifyCount'];
        }

        if (isset($map['cycleNotifyInterval'])) {
            $model->cycleNotifyInterval = $map['cycleNotifyInterval'];
        }

        if (isset($map['effectTimeRange'])) {
            $model->effectTimeRange = EffectTimeRange::fromMap($map['effectTimeRange']);
        }

        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['notifyChannels'])) {
            if (!empty($map['notifyChannels'])) {
                $model->notifyChannels = [];
                $n1 = 0;
                foreach ($map['notifyChannels'] as $item1) {
                    $model->notifyChannels[$n1] = NotifyChannel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['targetIncidentState'])) {
            $model->targetIncidentState = $map['targetIncidentState'];
        }

        if (isset($map['triggerDelay'])) {
            $model->triggerDelay = $map['triggerDelay'];
        }

        return $model;
    }
}
