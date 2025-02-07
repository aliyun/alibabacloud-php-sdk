<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListClusterChecksResponseBody;

use AlibabaCloud\Dara\Model;

class checks extends Model
{
    /**
     * @var string
     */
    public $checkId;
    /**
     * @var string
     */
    public $createdAt;
    /**
     * @var string
     */
    public $finishedAt;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'checkId'    => 'check_id',
        'createdAt'  => 'created_at',
        'finishedAt' => 'finished_at',
        'message'    => 'message',
        'status'     => 'status',
        'type'       => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['check_id'] = $this->checkId;
        }

        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }

        if (null !== $this->finishedAt) {
            $res['finished_at'] = $this->finishedAt;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['check_id'])) {
            $model->checkId = $map['check_id'];
        }

        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }

        if (isset($map['finished_at'])) {
            $model->finishedAt = $map['finished_at'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
