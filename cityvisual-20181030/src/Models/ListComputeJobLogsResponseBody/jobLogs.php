<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\ListComputeJobLogsResponseBody;

use AlibabaCloud\Tea\Model;

class jobLogs extends Model
{
    /**
     * @var string[]
     */
    public $jobLog;
    protected $_name = [
        'jobLog' => 'JobLog',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobLog) {
            $res['JobLog'] = $this->jobLog;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobLog'])) {
            if (!empty($map['JobLog'])) {
                $model->jobLog = $map['JobLog'];
            }
        }

        return $model;
    }
}
