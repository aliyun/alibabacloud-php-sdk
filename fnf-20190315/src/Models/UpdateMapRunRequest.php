<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Dara\Model;

class UpdateMapRunRequest extends Model
{
    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var string
     */
    public $executionName;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $mapRunName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $toleratedFailedCount;

    /**
     * @var float
     */
    public $toleratedFailedPercentage;
    protected $_name = [
        'concurrency' => 'Concurrency',
        'executionName' => 'ExecutionName',
        'flowName' => 'FlowName',
        'mapRunName' => 'MapRunName',
        'requestId' => 'RequestId',
        'toleratedFailedCount' => 'ToleratedFailedCount',
        'toleratedFailedPercentage' => 'ToleratedFailedPercentage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }

        if (null !== $this->executionName) {
            $res['ExecutionName'] = $this->executionName;
        }

        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        if (null !== $this->mapRunName) {
            $res['MapRunName'] = $this->mapRunName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->toleratedFailedCount) {
            $res['ToleratedFailedCount'] = $this->toleratedFailedCount;
        }

        if (null !== $this->toleratedFailedPercentage) {
            $res['ToleratedFailedPercentage'] = $this->toleratedFailedPercentage;
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
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }

        if (isset($map['ExecutionName'])) {
            $model->executionName = $map['ExecutionName'];
        }

        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        if (isset($map['MapRunName'])) {
            $model->mapRunName = $map['MapRunName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ToleratedFailedCount'])) {
            $model->toleratedFailedCount = $map['ToleratedFailedCount'];
        }

        if (isset($map['ToleratedFailedPercentage'])) {
            $model->toleratedFailedPercentage = $map['ToleratedFailedPercentage'];
        }

        return $model;
    }
}
