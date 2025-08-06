<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkFcParameters\body;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkFcParameters\concurrency;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkFcParameters\dataFormat;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkFcParameters\functionName;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkFcParameters\invocationType;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkFcParameters\qualifier;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkFcParameters\serviceName;

class sinkFcParameters extends Model
{
    /**
     * @var body
     */
    public $body;

    /**
     * @var concurrency
     */
    public $concurrency;

    /**
     * @var dataFormat
     */
    public $dataFormat;

    /**
     * @var functionName
     */
    public $functionName;

    /**
     * @var invocationType
     */
    public $invocationType;

    /**
     * @var qualifier
     */
    public $qualifier;

    /**
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

    public function validate()
    {
        if (null !== $this->body) {
            $this->body->validate();
        }
        if (null !== $this->concurrency) {
            $this->concurrency->validate();
        }
        if (null !== $this->dataFormat) {
            $this->dataFormat->validate();
        }
        if (null !== $this->functionName) {
            $this->functionName->validate();
        }
        if (null !== $this->invocationType) {
            $this->invocationType->validate();
        }
        if (null !== $this->qualifier) {
            $this->qualifier->validate();
        }
        if (null !== $this->serviceName) {
            $this->serviceName->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toArray($noStream) : $this->body;
        }

        if (null !== $this->concurrency) {
            $res['Concurrency'] = null !== $this->concurrency ? $this->concurrency->toArray($noStream) : $this->concurrency;
        }

        if (null !== $this->dataFormat) {
            $res['DataFormat'] = null !== $this->dataFormat ? $this->dataFormat->toArray($noStream) : $this->dataFormat;
        }

        if (null !== $this->functionName) {
            $res['FunctionName'] = null !== $this->functionName ? $this->functionName->toArray($noStream) : $this->functionName;
        }

        if (null !== $this->invocationType) {
            $res['InvocationType'] = null !== $this->invocationType ? $this->invocationType->toArray($noStream) : $this->invocationType;
        }

        if (null !== $this->qualifier) {
            $res['Qualifier'] = null !== $this->qualifier ? $this->qualifier->toArray($noStream) : $this->qualifier;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = null !== $this->serviceName ? $this->serviceName->toArray($noStream) : $this->serviceName;
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
