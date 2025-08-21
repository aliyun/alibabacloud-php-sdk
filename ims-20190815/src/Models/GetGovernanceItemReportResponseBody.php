<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceItemReportResponseBody\columnsSchema;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceItemReportResponseBody\columnsValue;

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
     * @var string
     */
    public $generateTime;

    /**
     * @var bool
     */
    public $isTruncated;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var mixed
     */
    public $metricValue;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'columnsSchema' => 'ColumnsSchema',
        'columnsValue' => 'ColumnsValue',
        'generateTime' => 'GenerateTime',
        'isTruncated' => 'IsTruncated',
        'marker' => 'Marker',
        'metricType' => 'MetricType',
        'metricValue' => 'MetricValue',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->columnsSchema) {
            $this->columnsSchema->validate();
        }
        if (null !== $this->columnsValue) {
            $this->columnsValue->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnsSchema) {
            $res['ColumnsSchema'] = null !== $this->columnsSchema ? $this->columnsSchema->toArray($noStream) : $this->columnsSchema;
        }

        if (null !== $this->columnsValue) {
            $res['ColumnsValue'] = null !== $this->columnsValue ? $this->columnsValue->toArray($noStream) : $this->columnsValue;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
