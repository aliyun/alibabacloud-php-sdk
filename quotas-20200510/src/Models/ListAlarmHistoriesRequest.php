<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Tea\Model;

class ListAlarmHistoriesRequest extends Model
{
    /**
     * @description The ID of the alert.
     *
     * @example 18b3be23-b7b0-4d45-91bc-d0c331aa****
     *
     * @var string
     */
    public $alarmId;

    /**
     * @description The end of the time range to query.
     *
     * @example 20201024
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The keyword that is used for the query.
     *
     * @example Quantity
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The maximum number of records that can be returned for the query.
     *
     * Valid values: 1 to 200. Default value: 30.
     * @example 30
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that marks the position from which you want to start the query. If you leave this parameter empty, the query starts from the beginning.
     *
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The abbreviation of the Alibaba Cloud service name.
     *
     * > For more information, see [Alibaba Cloud services that support Quota Center](https://help.aliyun.com/document_detail/182368.html).
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The beginning of the time range to query.
     *
     * @example 20201020
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'alarmId'     => 'AlarmId',
        'endTime'     => 'EndTime',
        'keyword'     => 'Keyword',
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'productCode' => 'ProductCode',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmId) {
            $res['AlarmId'] = $this->alarmId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlarmHistoriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmId'])) {
            $model->alarmId = $map['AlarmId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
