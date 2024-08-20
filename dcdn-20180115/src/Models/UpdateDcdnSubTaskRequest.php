<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class UpdateDcdnSubTaskRequest extends Model
{
    /**
     * @description The domain names that you want to include in the operations report. If you do not specify a domain name, all domain names that belong to your Alibaba Cloud account are included.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end time of the operations report. Specify the time in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2021-06-17T00:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The IDs of the metrics that you want to update. Separate IDs with commas (,). You can call the [DescribeDcdnSubList](https://help.aliyun.com/document_detail/270075.html) operation to query the IDs.
     *
     * @example 2,4,6
     *
     * @var string
     */
    public $reportIds;

    /**
     * @description The start time of the operations report. Specify the time in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2021-04-17T00:00:00Z
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
     * @return UpdateDcdnSubTaskRequest
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
