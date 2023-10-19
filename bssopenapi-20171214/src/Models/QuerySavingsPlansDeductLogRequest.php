<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QuerySavingsPlansDeductLogRequest extends Model
{
    /**
     * @description The end of the time range to query. Specify the time in the format of yyyy-MM-dd HH:mm:ss.
     *
     * @example 2022-01-05 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the instance.
     *
     * @example spn-XXXXXXX
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the instance ID based on which the data is queried. Valid values:
     *
     *   spn: queries data based on the ID of the savings plan instance.
     *   product: queries data based on the ID of the cloud service instance.
     *
     * @example spn
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The language of the return data. Valid values:
     *
     *   ZH: Chinese
     *   EN: English
     *
     * @example ZH
     *
     * @var string
     */
    public $locale;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The beginning of the time range to query. Specify the time in the format of yyyy-MM-dd HH:mm:ss.
     *
     * @example 2022-01-01 00:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'      => 'EndTime',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'locale'       => 'Locale',
        'pageNum'      => 'PageNum',
        'pageSize'     => 'PageSize',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySavingsPlansDeductLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
