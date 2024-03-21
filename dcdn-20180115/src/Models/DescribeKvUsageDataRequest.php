<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeKvUsageDataRequest extends Model
{
    /**
     * @description The request method. If the parameter is empty, data about all methods is returned. Valid values:
     *
     *   **get**
     *   **put**
     *   **list**
     *   **delete**
     *
     * @example get
     *
     * @var string
     */
    public $accessType;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2022-08-10T23:59:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The type of the request data. Set the value to **acc**.
     *
     * @example acc
     *
     * @var string
     */
    public $field;

    /**
     * @description The namespace ID. If the parameter is empty, data about all namespaces is returned.
     *
     * You can specify a maximum number of 30 namespace IDs and separate them with commas (,).
     * @example 12423131231****
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The type of the response data. Valid values:
     *
     *   **detail**: detailed data
     *   **total**: summary data
     *
     * Default value: **detail**.
     * @example detail
     *
     * @var string
     */
    public $responseType;

    /**
     * @description The key that is used to group data. Valid values: **type** and **namespace**.
     *
     *   **type**: Data is grouped by time. The data in the last 5 minutes is returned.
     *   **namespace**: Data is grouped by namespace and is not padded with zeros.
     *   Default value: **type**.
     *
     * If **ResponseType** is set to **total**, data to return is not grouped by **namespace** but by **type**.
     * @example type
     *
     * @var string
     */
    public $splitBy;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * The minimum data granularity is 1 hour. If you do not specify this parameter, the data in the last seven days is returned.
     * @example 2022-08-10T00:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'accessType'   => 'AccessType',
        'endTime'      => 'EndTime',
        'field'        => 'Field',
        'namespaceId'  => 'NamespaceId',
        'responseType' => 'ResponseType',
        'splitBy'      => 'SplitBy',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->responseType) {
            $res['ResponseType'] = $this->responseType;
        }
        if (null !== $this->splitBy) {
            $res['SplitBy'] = $this->splitBy;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeKvUsageDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['ResponseType'])) {
            $model->responseType = $map['ResponseType'];
        }
        if (isset($map['SplitBy'])) {
            $model->splitBy = $map['SplitBy'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
