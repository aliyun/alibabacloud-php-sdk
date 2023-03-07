<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeNFSClientStatusResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $exitCode;

    /**
     * @example Running
     *
     * @var string
     */
    public $invokeRecordStatus;

    /**
     * @example TmV3LUlWtmOWc6XxpZW50Rm9yLi4uDQ****
     *
     * @var string
     */
    public $output;
    protected $_name = [
        'exitCode'           => 'ExitCode',
        'invokeRecordStatus' => 'InvokeRecordStatus',
        'output'             => 'Output',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exitCode) {
            $res['ExitCode'] = $this->exitCode;
        }
        if (null !== $this->invokeRecordStatus) {
            $res['InvokeRecordStatus'] = $this->invokeRecordStatus;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExitCode'])) {
            $model->exitCode = $map['ExitCode'];
        }
        if (isset($map['InvokeRecordStatus'])) {
            $model->invokeRecordStatus = $map['InvokeRecordStatus'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        return $model;
    }
}
