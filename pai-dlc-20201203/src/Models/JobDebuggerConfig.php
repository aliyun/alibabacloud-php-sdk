<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class JobDebuggerConfig extends Model
{
    /**
     * @description debugger配置信息
     *
     * @var string
     */
    public $debuggerConfigContent;

    /**
     * @description debugger配置项ID
     *
     * @var string
     */
    public $debuggerConfigId;

    /**
     * @description debugger配置创建的时间
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description 作业ID
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'debuggerConfigContent' => 'DebuggerConfigContent',
        'debuggerConfigId'      => 'DebuggerConfigId',
        'gmtCreateTime'         => 'GmtCreateTime',
        'jobId'                 => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->debuggerConfigContent) {
            $res['DebuggerConfigContent'] = $this->debuggerConfigContent;
        }
        if (null !== $this->debuggerConfigId) {
            $res['DebuggerConfigId'] = $this->debuggerConfigId;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobDebuggerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DebuggerConfigContent'])) {
            $model->debuggerConfigContent = $map['DebuggerConfigContent'];
        }
        if (isset($map['DebuggerConfigId'])) {
            $model->debuggerConfigId = $map['DebuggerConfigId'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
