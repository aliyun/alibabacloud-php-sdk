<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLSampleEvent extends Model
{
    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $globalStep;

    /**
     * @var string
     */
    public $stage;

    /**
     * @var int
     */
    public $timestampMs;

    /**
     * @var string
     */
    public $to;
    protected $_name = [
        'detail' => 'Detail',
        'from' => 'From',
        'globalStep' => 'GlobalStep',
        'stage' => 'Stage',
        'timestampMs' => 'TimestampMs',
        'to' => 'To',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->globalStep) {
            $res['GlobalStep'] = $this->globalStep;
        }

        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }

        if (null !== $this->timestampMs) {
            $res['TimestampMs'] = $this->timestampMs;
        }

        if (null !== $this->to) {
            $res['To'] = $this->to;
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
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['GlobalStep'])) {
            $model->globalStep = $map['GlobalStep'];
        }

        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }

        if (isset($map['TimestampMs'])) {
            $model->timestampMs = $map['TimestampMs'];
        }

        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
