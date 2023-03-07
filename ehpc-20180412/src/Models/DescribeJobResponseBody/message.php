<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeJobResponseBody;

use AlibabaCloud\Tea\Model;

class message extends Model
{
    /**
     * @description The details of the job.
     *
     * @example {"2.scheduler": {"egroup": "users","Stageout_status": 1,"Keep_Files": "n","server": "scheduler","queue": "workq"}}
     *
     * @var string
     */
    public $jobInfo;
    protected $_name = [
        'jobInfo' => 'JobInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobInfo) {
            $res['JobInfo'] = $this->jobInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return message
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobInfo'])) {
            $model->jobInfo = $map['JobInfo'];
        }

        return $model;
    }
}
