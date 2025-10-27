<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Dara\Model;

class ListExecutionsRequest extends Model
{
    /**
     * @var string
     */
    public $executionNamePrefix;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $mapRunName;

    /**
     * @var bool
     */
    public $metadataOnly;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var string
     */
    public $startedTimeBegin;

    /**
     * @var string
     */
    public $startedTimeEnd;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'executionNamePrefix' => 'ExecutionNamePrefix',
        'flowName' => 'FlowName',
        'limit' => 'Limit',
        'mapRunName' => 'MapRunName',
        'metadataOnly' => 'MetadataOnly',
        'nextToken' => 'NextToken',
        'qualifier' => 'Qualifier',
        'startedTimeBegin' => 'StartedTimeBegin',
        'startedTimeEnd' => 'StartedTimeEnd',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executionNamePrefix) {
            $res['ExecutionNamePrefix'] = $this->executionNamePrefix;
        }

        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->mapRunName) {
            $res['MapRunName'] = $this->mapRunName;
        }

        if (null !== $this->metadataOnly) {
            $res['MetadataOnly'] = $this->metadataOnly;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->qualifier) {
            $res['Qualifier'] = $this->qualifier;
        }

        if (null !== $this->startedTimeBegin) {
            $res['StartedTimeBegin'] = $this->startedTimeBegin;
        }

        if (null !== $this->startedTimeEnd) {
            $res['StartedTimeEnd'] = $this->startedTimeEnd;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ExecutionNamePrefix'])) {
            $model->executionNamePrefix = $map['ExecutionNamePrefix'];
        }

        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['MapRunName'])) {
            $model->mapRunName = $map['MapRunName'];
        }

        if (isset($map['MetadataOnly'])) {
            $model->metadataOnly = $map['MetadataOnly'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Qualifier'])) {
            $model->qualifier = $map['Qualifier'];
        }

        if (isset($map['StartedTimeBegin'])) {
            $model->startedTimeBegin = $map['StartedTimeBegin'];
        }

        if (isset($map['StartedTimeEnd'])) {
            $model->startedTimeEnd = $map['StartedTimeEnd'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
