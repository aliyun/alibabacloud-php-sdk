<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeNFSClientStatusResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $invokeRecordStatus;

    /**
     * @var int
     */
    public $exitCode;
    protected $_name = [
        'output'             => 'Output',
        'invokeRecordStatus' => 'InvokeRecordStatus',
        'exitCode'           => 'ExitCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->invokeRecordStatus) {
            $res['InvokeRecordStatus'] = $this->invokeRecordStatus;
        }
        if (null !== $this->exitCode) {
            $res['ExitCode'] = $this->exitCode;
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
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['InvokeRecordStatus'])) {
            $model->invokeRecordStatus = $map['InvokeRecordStatus'];
        }
        if (isset($map['ExitCode'])) {
            $model->exitCode = $map['ExitCode'];
        }

        return $model;
    }
}
