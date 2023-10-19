<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class PunishRule extends Model
{
    /**
     * @var string
     */
    public $actionCode;

    /**
     * @var string
     */
    public $endsAt;

    /**
     * @var bool
     */
    public $impermanent;

    /**
     * @var string
     */
    public $startsAt;
    protected $_name = [
        'actionCode'  => 'action_code',
        'endsAt'      => 'ends_at',
        'impermanent' => 'impermanent',
        'startsAt'    => 'starts_at',
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
        if (null !== $this->endsAt) {
            $res['ends_at'] = $this->endsAt;
        }
        if (null !== $this->impermanent) {
            $res['impermanent'] = $this->impermanent;
        }
        if (null !== $this->startsAt) {
            $res['starts_at'] = $this->startsAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PunishRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action_code'])) {
            $model->actionCode = $map['action_code'];
        }
        if (isset($map['ends_at'])) {
            $model->endsAt = $map['ends_at'];
        }
        if (isset($map['impermanent'])) {
            $model->impermanent = $map['impermanent'];
        }
        if (isset($map['starts_at'])) {
            $model->startsAt = $map['starts_at'];
        }

        return $model;
    }
}
