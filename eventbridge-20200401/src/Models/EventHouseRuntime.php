<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class EventHouseRuntime extends Model
{
    /**
     * @var int
     */
    public $cu;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $stage;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $targetCu;
    protected $_name = [
        'cu' => 'Cu',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'name' => 'Name',
        'progress' => 'Progress',
        'stage' => 'Stage',
        'status' => 'Status',
        'targetCu' => 'TargetCu',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cu) {
            $res['Cu'] = $this->cu;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->targetCu) {
            $res['TargetCu'] = $this->targetCu;
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
        if (isset($map['Cu'])) {
            $model->cu = $map['Cu'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TargetCu'])) {
            $model->targetCu = $map['TargetCu'];
        }

        return $model;
    }
}
