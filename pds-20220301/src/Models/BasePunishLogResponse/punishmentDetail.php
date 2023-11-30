<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\BasePunishLogResponse;

use AlibabaCloud\SDK\Pds\V20220301\Models\PunishRule;
use AlibabaCloud\Tea\Model;

class punishmentDetail extends Model
{
    /**
     * @var string
     */
    public $actionCode;

    /**
     * @var int
     */
    public $investigationStatus;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $punishReason;

    /**
     * @var PunishRule[]
     */
    public $punishments;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'actionCode'          => 'action_code',
        'investigationStatus' => 'investigation_status',
        'method'              => 'method',
        'punishReason'        => 'punish_reason',
        'punishments'         => 'punishments',
        'source'              => 'source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionCode) {
            $res['action_code'] = $this->actionCode;
        }
        if (null !== $this->investigationStatus) {
            $res['investigation_status'] = $this->investigationStatus;
        }
        if (null !== $this->method) {
            $res['method'] = $this->method;
        }
        if (null !== $this->punishReason) {
            $res['punish_reason'] = $this->punishReason;
        }
        if (null !== $this->punishments) {
            $res['punishments'] = [];
            if (null !== $this->punishments && \is_array($this->punishments)) {
                $n = 0;
                foreach ($this->punishments as $item) {
                    $res['punishments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return punishmentDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action_code'])) {
            $model->actionCode = $map['action_code'];
        }
        if (isset($map['investigation_status'])) {
            $model->investigationStatus = $map['investigation_status'];
        }
        if (isset($map['method'])) {
            $model->method = $map['method'];
        }
        if (isset($map['punish_reason'])) {
            $model->punishReason = $map['punish_reason'];
        }
        if (isset($map['punishments'])) {
            if (!empty($map['punishments'])) {
                $model->punishments = [];
                $n                  = 0;
                foreach ($map['punishments'] as $item) {
                    $model->punishments[$n++] = null !== $item ? PunishRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        return $model;
    }
}
