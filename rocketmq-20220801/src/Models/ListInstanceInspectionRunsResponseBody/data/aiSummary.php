<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceInspectionRunsResponseBody\data;

use AlibabaCloud\Dara\Model;

class aiSummary extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'status' => 'status',
        'text' => 'text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
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
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
