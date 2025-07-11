<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionThreadDumpResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example \\"Thread-7\\" Id=67 TIMED_WAITING\\n\\tat java.base@17.0.5/java.lang.Thread.sleep(Native Method)\\n\\tat app//com.xxl.job.executor.service.jobhandler.SampleXxlJob.shardingJobHandler(SampleXxlJob.java:73)\\n\\tat java.base@17.0.5/jdk.internal.reflect.NativeMethodAccessorImpl.invoke0(Native Method)\\n\\tat java.base@17.0.5/jdk.internal.reflect.NativeMethodAccessorImpl.invoke(NativeMethodAccessorImpl.java:77)\\n\\tat java.base@17.0.5/jdk.internal.reflect.DelegatingMethodAccessorImpl.invoke(DelegatingMethodAccessorImpl.java:43)\\n\\tat java.base@17.0.5/java.lang.reflect.Method.invoke(Method.java:568)\\n\\tat app//com.xxl.job.core.handler.impl.MethodJobHandler.execute(MethodJobHandler.java:29)\\n\\tat app//com.xxl.job.core.thread.JobThread.run(JobThread.java:152)\\n
     *
     * @var string
     */
    public $dump;
    protected $_name = [
        'dump' => 'Dump',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dump) {
            $res['Dump'] = $this->dump;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dump'])) {
            $model->dump = $map['Dump'];
        }

        return $model;
    }
}
