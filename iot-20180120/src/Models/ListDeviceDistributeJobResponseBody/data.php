<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListDeviceDistributeJobResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListDeviceDistributeJobResponseBody\data\jobInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $total;

    /**
     * @var jobInfo
     */
    public $jobInfo;
    protected $_name = [
        'total'   => 'Total',
        'jobInfo' => 'JobInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->jobInfo) {
            $res['JobInfo'] = null !== $this->jobInfo ? $this->jobInfo->toMap() : null;
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['JobInfo'])) {
            $model->jobInfo = jobInfo::fromMap($map['JobInfo']);
        }

        return $model;
    }
}
