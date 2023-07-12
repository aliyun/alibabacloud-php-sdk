<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListDeviceDistributeJobResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListDeviceDistributeJobResponse\data\jobInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $total;

    /**
     * @var jobInfo
     */
    public $jobInfo;
    protected $_name = [
        'nextToken' => 'NextToken',
        'total'     => 'Total',
        'jobInfo'   => 'JobInfo',
    ];

    public function validate()
    {
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('jobInfo', $this->jobInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['JobInfo'])) {
            $model->jobInfo = jobInfo::fromMap($map['JobInfo']);
        }

        return $model;
    }
}
