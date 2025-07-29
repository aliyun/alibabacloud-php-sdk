<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks\taskSpec\retryPolicy;

use AlibabaCloud\Tea\Model;

class exitCodeActions extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $action;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $exitCode;
    protected $_name = [
        'action' => 'Action',
        'exitCode' => 'ExitCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->exitCode) {
            $res['ExitCode'] = $this->exitCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return exitCodeActions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ExitCode'])) {
            $model->exitCode = $map['ExitCode'];
        }

        return $model;
    }
}
