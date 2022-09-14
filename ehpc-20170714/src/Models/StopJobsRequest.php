<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20170714\Models;

use AlibabaCloud\Tea\Model;

class StopJobsRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $jobs;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'jobs'      => 'Jobs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->jobs) {
            $res['Jobs'] = $this->jobs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Jobs'])) {
            $model->jobs = $map['Jobs'];
        }

        return $model;
    }
}
