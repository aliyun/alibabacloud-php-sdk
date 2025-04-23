<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\retryStrategy;

use AlibabaCloud\Dara\Model;

class evaluateOnExit extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $onExitCode;
    protected $_name = [
        'action' => 'Action',
        'onExitCode' => 'OnExitCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->onExitCode) {
            $res['OnExitCode'] = $this->onExitCode;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['OnExitCode'])) {
            $model->onExitCode = $map['OnExitCode'];
        }

        return $model;
    }
}
