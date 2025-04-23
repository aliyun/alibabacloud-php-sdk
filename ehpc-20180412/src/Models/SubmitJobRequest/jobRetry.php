<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitJobRequest;

use AlibabaCloud\Dara\Model;

class jobRetry extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $onExitCode;

    /**
     * @var int
     */
    public $priority;
    protected $_name = [
        'count' => 'Count',
        'onExitCode' => 'OnExitCode',
        'priority' => 'Priority',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->onExitCode) {
            $res['OnExitCode'] = $this->onExitCode;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['OnExitCode'])) {
            $model->onExitCode = $map['OnExitCode'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
