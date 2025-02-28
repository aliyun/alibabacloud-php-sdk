<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Dara\Model;

class ReportTaskFailedRequest extends Model
{
    /**
     * @var string
     */
    public $cause;
    /**
     * @var string
     */
    public $error;
    /**
     * @var string
     */
    public $taskToken;
    protected $_name = [
        'cause'     => 'Cause',
        'error'     => 'Error',
        'taskToken' => 'TaskToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cause) {
            $res['Cause'] = $this->cause;
        }

        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->taskToken) {
            $res['TaskToken'] = $this->taskToken;
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
        if (isset($map['Cause'])) {
            $model->cause = $map['Cause'];
        }

        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['TaskToken'])) {
            $model->taskToken = $map['TaskToken'];
        }

        return $model;
    }
}
