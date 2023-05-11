<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListDeviceDistributeJobResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListDeviceDistributeJobResponseBody\data\jobInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information about the task.
     *
     * @var jobInfo
     */
    public $jobInfo;

    /**
     * @description The token that is used to retrieve the subsequent pages of the query results. The value of this parameter can be used in the next query to obtain the subsequent pages of results.
     *
     * If the return value is empty, no subsequent page exists.
     * @example TGlzdFJlc291***
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The total number of device distribution tasks.
     *
     * @example 10
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'jobInfo'   => 'JobInfo',
        'nextToken' => 'NextToken',
        'total'     => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobInfo) {
            $res['JobInfo'] = null !== $this->jobInfo ? $this->jobInfo->toMap() : null;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['JobInfo'])) {
            $model->jobInfo = jobInfo::fromMap($map['JobInfo']);
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
