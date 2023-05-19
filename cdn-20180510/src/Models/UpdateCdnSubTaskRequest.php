<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class UpdateCdnSubTaskRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The domain names that you want to track. You can specify multiple domain names and separate them with commas (,). You can specify at most 500 domain names in each call.
     *
     * If you do not specify a domain name, the task collects data from all domain names that belong to your Alibaba Cloud account.
     * @example 2020-11-17T00:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The IDs of operations reports that you want to update. Separate IDs with commas (,).
     *
     * @example 1,2,3
     *
     * @var string
     */
    public $reportIds;

    /**
     * @description The operation that you want to perform. Set the value to **UpdateCdnSubTask**.
     *
     * @example 2020-09-17T00:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'domainName' => 'DomainName',
        'endTime'    => 'EndTime',
        'reportIds'  => 'ReportIds',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->reportIds) {
            $res['ReportIds'] = $this->reportIds;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCdnSubTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ReportIds'])) {
            $model->reportIds = $map['ReportIds'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
