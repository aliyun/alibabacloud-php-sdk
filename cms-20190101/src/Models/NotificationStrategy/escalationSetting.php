<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy;

use AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\escalationSetting\customChannels;
use AlibabaCloud\Tea\Model;

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
        'autoResolveMin'  => 'AutoResolveMin',
        'customChannels'  => 'CustomChannels',
        'escalationLevel' => 'EscalationLevel',
        'escalationUuid'  => 'EscalationUuid',
        'range'           => 'Range',
        'retriggerMin'    => 'RetriggerMin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoResolveMin) {
            $res['AutoResolveMin'] = $this->autoResolveMin;
        }
        if (null !== $this->customChannels) {
            $res['CustomChannels'] = [];
            if (null !== $this->customChannels && \is_array($this->customChannels)) {
                $n = 0;
                foreach ($this->customChannels as $item) {
                    $res['CustomChannels'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return escalationSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoResolveMin'])) {
            $model->autoResolveMin = $map['AutoResolveMin'];
        }
        if (isset($map['CustomChannels'])) {
            if (!empty($map['CustomChannels'])) {
                $model->customChannels = [];
                $n                     = 0;
                foreach ($map['CustomChannels'] as $item) {
                    $model->customChannels[$n++] = null !== $item ? customChannels::fromMap($item) : $item;
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
