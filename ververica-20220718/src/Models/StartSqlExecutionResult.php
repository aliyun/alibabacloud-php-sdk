<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class StartSqlExecutionResult extends Model
{
    /**
     * @var bool
     */
    public $newlyCreated;

    /**
     * @var string
     */
    public $sqlExecutionId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'newlyCreated' => 'newlyCreated',
        'sqlExecutionId' => 'sqlExecutionId',
        'success' => 'success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newlyCreated) {
            $res['newlyCreated'] = $this->newlyCreated;
        }

        if (null !== $this->sqlExecutionId) {
            $res['sqlExecutionId'] = $this->sqlExecutionId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['newlyCreated'])) {
            $model->newlyCreated = $map['newlyCreated'];
        }

        if (isset($map['sqlExecutionId'])) {
            $model->sqlExecutionId = $map['sqlExecutionId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
