<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkFcParameters\body;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkFcParameters\concurrency;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkFcParameters\dataFormat;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkFcParameters\functionName;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkFcParameters\invocationType;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkFcParameters\qualifier;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkFcParameters\serviceName;
use AlibabaCloud\Tea\Model;

class sinkFcParameters extends Model
{
    /**
     * @description The message body that you want to deliver to Function Compute.
     *
     * @var body
     */
    public $body;

    /**
     * @description The delivery concurrency. Minimum value: 1.
     *
     * @var concurrency
     */
    public $concurrency;

    /**
     * @description The rule that you want to use to transform the format of event content.
     *
     * @var dataFormat
     */
    public $dataFormat;

    /**
     * @description The function name.
     *
     * @var functionName
     */
    public $functionName;

    /**
     * @description The invocation mode. Valid values: Sync and Async.
     *
     * @var invocationType
     */
    public $invocationType;

    /**
     * @description The alias of the service to which the function belongs.
     *
     * @var qualifier
     */
    public $qualifier;

    /**
     * @description The service name.
     *
     * @var serviceName
     */
    public $serviceName;
    protected $_name = [
        'body' => 'Body',
        'concurrency' => 'Concurrency',
        'dataFormat' => 'DataFormat',
        'functionName' => 'FunctionName',
        'invocationType' => 'InvocationType',
        'qualifier' => 'Qualifier',
        'serviceName' => 'ServiceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->concurrency) {
            $res['Concurrency'] = null !== $this->concurrency ? $this->concurrency->toMap() : null;
        }
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = null !== $this->dataFormat ? $this->dataFormat->toMap() : null;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = null !== $this->functionName ? $this->functionName->toMap() : null;
        }
        if (null !== $this->invocationType) {
            $res['InvocationType'] = null !== $this->invocationType ? $this->invocationType->toMap() : null;
        }
        if (null !== $this->qualifier) {
            $res['Qualifier'] = null !== $this->qualifier ? $this->qualifier->toMap() : null;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = null !== $this->serviceName ? $this->serviceName->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sinkFcParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = body::fromMap($map['Body']);
        }
        if (isset($map['Concurrency'])) {
            $model->concurrency = concurrency::fromMap($map['Concurrency']);
        }
        if (isset($map['DataFormat'])) {
            $model->dataFormat = dataFormat::fromMap($map['DataFormat']);
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = functionName::fromMap($map['FunctionName']);
        }
        if (isset($map['InvocationType'])) {
            $model->invocationType = invocationType::fromMap($map['InvocationType']);
        }
        if (isset($map['Qualifier'])) {
            $model->qualifier = qualifier::fromMap($map['Qualifier']);
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = serviceName::fromMap($map['ServiceName']);
        }

        return $model;
    }
}
