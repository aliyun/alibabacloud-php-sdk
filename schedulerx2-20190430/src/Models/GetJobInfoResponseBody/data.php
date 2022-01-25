<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoResponseBody;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoResponseBody\data\jobConfigInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var jobConfigInfo
     */
    public $jobConfigInfo;
    protected $_name = [
        'jobConfigInfo' => 'JobConfigInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobConfigInfo) {
            $res['JobConfigInfo'] = null !== $this->jobConfigInfo ? $this->jobConfigInfo->toMap() : null;
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
        if (isset($map['JobConfigInfo'])) {
            $model->jobConfigInfo = jobConfigInfo::fromMap($map['JobConfigInfo']);
        }

        return $model;
    }
}
