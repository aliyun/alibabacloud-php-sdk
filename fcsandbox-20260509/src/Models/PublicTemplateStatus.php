<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class PublicTemplateStatus extends Model
{
    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var PublicTemplateStatusReason
     */
    public $reason;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'finishedAt' => 'finishedAt',
        'reason' => 'reason',
        'state' => 'state',
    ];

    public function validate()
    {
        if (null !== $this->reason) {
            $this->reason->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->finishedAt) {
            $res['finishedAt'] = $this->finishedAt;
        }

        if (null !== $this->reason) {
            $res['reason'] = null !== $this->reason ? $this->reason->toArray($noStream) : $this->reason;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
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
        if (isset($map['finishedAt'])) {
            $model->finishedAt = $map['finishedAt'];
        }

        if (isset($map['reason'])) {
            $model->reason = PublicTemplateStatusReason::fromMap($map['reason']);
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
