<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class AgentDataSemanticsStageProgress extends Model
{
    /**
     * @var string
     */
    public $stage;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'stage' => 'Stage',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
