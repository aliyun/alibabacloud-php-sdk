<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceItemReportResponseBody\columnsSchema;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceItemReportResponseBody\columnsValue;
use AlibabaCloud\Tea\Model;

class GetGovernanceItemReportResponseBody extends Model
{
    /**
     * @var columnsSchema
     */
    public $columnsSchema;

    /**
     * @var columnsValue
     */
    public $columnsValue;

    /**
     * @example 2020-10-19T15:06:52Z
     *
     * @var string
     */
    public $generateTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @example EXAMPLE
     *
     * @var string
     */
    public $marker;

    /**
     * @example Number
     *
     * @var string
     */
    public $metricType;

    /**
     * @example 100
     *
     * @var mixed
     */
    public $metricValue;

    /**
     * @example F2CE9688-AA85-5F23-8C22-0EC23473405F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'columnsSchema' => 'ColumnsSchema',
        'columnsValue'  => 'ColumnsValue',
        'generateTime'  => 'GenerateTime',
        'isTruncated'   => 'IsTruncated',
        'marker'        => 'Marker',
        'metricType'    => 'MetricType',
        'metricValue'   => 'MetricValue',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnsSchema) {
            $res['ColumnsSchema'] = null !== $this->columnsSchema ? $this->columnsSchema->toMap() : null;
        }
        if (null !== $this->columnsValue) {
            $res['ColumnsValue'] = null !== $this->columnsValue ? $this->columnsValue->toMap() : null;
        }
        if (null !== $this->generateTime) {
            $res['GenerateTime'] = $this->generateTime;
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->metricValue) {
            $res['MetricValue'] = $this->metricValue;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGovernanceItemReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnsSchema'])) {
            $model->columnsSchema = columnsSchema::fromMap($map['ColumnsSchema']);
        }
        if (isset($map['ColumnsValue'])) {
            $model->columnsValue = columnsValue::fromMap($map['ColumnsValue']);
        }
        if (isset($map['GenerateTime'])) {
            $model->generateTime = $map['GenerateTime'];
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['MetricValue'])) {
            $model->metricValue = $map['MetricValue'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
