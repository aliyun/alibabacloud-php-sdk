<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class SqlStatementExecuteResult extends Model
{
    /**
     * @var ErrorDetails
     */
    public $errorDetails;

    /**
     * @var bool
     */
    public $executeSuccess;

    /**
     * @var string
     */
    public $statement;
    protected $_name = [
        'errorDetails' => 'errorDetails',
        'executeSuccess' => 'executeSuccess',
        'statement' => 'statement',
    ];

    public function validate()
    {
        if (null !== $this->errorDetails) {
            $this->errorDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorDetails) {
            $res['errorDetails'] = null !== $this->errorDetails ? $this->errorDetails->toArray($noStream) : $this->errorDetails;
        }

        if (null !== $this->executeSuccess) {
            $res['executeSuccess'] = $this->executeSuccess;
        }

        if (null !== $this->statement) {
            $res['statement'] = $this->statement;
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
        if (isset($map['errorDetails'])) {
            $model->errorDetails = ErrorDetails::fromMap($map['errorDetails']);
        }

        if (isset($map['executeSuccess'])) {
            $model->executeSuccess = $map['executeSuccess'];
        }

        if (isset($map['statement'])) {
            $model->statement = $map['statement'];
        }

        return $model;
    }
}
