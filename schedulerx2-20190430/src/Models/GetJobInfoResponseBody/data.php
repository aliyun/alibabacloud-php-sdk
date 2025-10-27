<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoResponseBody\data\jobConfigInfo;

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
        if (null !== $this->jobConfigInfo) {
            $this->jobConfigInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobConfigInfo) {
            $res['JobConfigInfo'] = null !== $this->jobConfigInfo ? $this->jobConfigInfo->toArray($noStream) : $this->jobConfigInfo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobConfigInfo'])) {
            $model->jobConfigInfo = jobConfigInfo::fromMap($map['JobConfigInfo']);
        }

        return $model;
    }
}
