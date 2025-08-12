<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\escalationSetting\customChannels;

class escalationSetting extends Model
{
    /**
     * @var int
     */
    public $autoResolveMin;

    /**
     * @var customChannels[]
     */
    public $customChannels;

    /**
     * @var string
     */
    public $escalationLevel;

    /**
     * @var string
     */
    public $escalationUuid;

    /**
     * @var string
     */
    public $range;

    /**
     * @var int
     */
    public $retriggerMin;
    protected $_name = [
        'autoResolveMin' => 'AutoResolveMin',
        'customChannels' => 'CustomChannels',
        'escalationLevel' => 'EscalationLevel',
        'escalationUuid' => 'EscalationUuid',
        'range' => 'Range',
        'retriggerMin' => 'RetriggerMin',
    ];

    public function validate()
    {
        if (\is_array($this->customChannels)) {
            Model::validateArray($this->customChannels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoResolveMin) {
            $res['AutoResolveMin'] = $this->autoResolveMin;
        }

        if (null !== $this->customChannels) {
            if (\is_array($this->customChannels)) {
                $res['CustomChannels'] = [];
                $n1 = 0;
                foreach ($this->customChannels as $item1) {
                    $res['CustomChannels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->escalationLevel) {
            $res['EscalationLevel'] = $this->escalationLevel;
        }

        if (null !== $this->escalationUuid) {
            $res['EscalationUuid'] = $this->escalationUuid;
        }

        if (null !== $this->range) {
            $res['Range'] = $this->range;
        }

        if (null !== $this->retriggerMin) {
            $res['RetriggerMin'] = $this->retriggerMin;
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
        if (isset($map['AutoResolveMin'])) {
            $model->autoResolveMin = $map['AutoResolveMin'];
        }

        if (isset($map['CustomChannels'])) {
            if (!empty($map['CustomChannels'])) {
                $model->customChannels = [];
                $n1 = 0;
                foreach ($map['CustomChannels'] as $item1) {
                    $model->customChannels[$n1] = customChannels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EscalationLevel'])) {
            $model->escalationLevel = $map['EscalationLevel'];
        }

        if (isset($map['EscalationUuid'])) {
            $model->escalationUuid = $map['EscalationUuid'];
        }

        if (isset($map['Range'])) {
            $model->range = $map['Range'];
        }

        if (isset($map['RetriggerMin'])) {
            $model->retriggerMin = $map['RetriggerMin'];
        }

        return $model;
    }
}
