<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class KillSparkJobRequest extends Model
{
    /**
     * @var string
     */
    public $vcName;

    /**
     * @var string
     */
    public $jobId;
    protected $_name = [
        'vcName' => 'VcName',
        'jobId'  => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vcName) {
            $res['VcName'] = $this->vcName;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KillSparkJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VcName'])) {
            $model->vcName = $map['VcName'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
