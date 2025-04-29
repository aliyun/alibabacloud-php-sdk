<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyExternalNodeStatusUpdateRequest;

use AlibabaCloud\Dara\Model;

class operationRecords extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $operateTime;

    /**
     * @var string
     */
    public $operatorName;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'comment' => 'comment',
        'operateTime' => 'operate_time',
        'operatorName' => 'operator_name',
        'result' => 'result',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }

        if (null !== $this->operateTime) {
            $res['operate_time'] = $this->operateTime;
        }

        if (null !== $this->operatorName) {
            $res['operator_name'] = $this->operatorName;
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }

        if (isset($map['operate_time'])) {
            $model->operateTime = $map['operate_time'];
        }

        if (isset($map['operator_name'])) {
            $model->operatorName = $map['operator_name'];
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
