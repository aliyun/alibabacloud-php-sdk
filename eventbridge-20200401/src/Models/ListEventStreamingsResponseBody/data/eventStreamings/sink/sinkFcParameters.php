<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkFcParameters\body;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkFcParameters\concurrency;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkFcParameters\functionName;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkFcParameters\invocationType;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkFcParameters\qualifier;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkFcParameters\serviceName;
use AlibabaCloud\Tea\Model;

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
        'body'           => 'Body',
        'concurrency'    => 'Concurrency',
        'functionName'   => 'FunctionName',
        'invocationType' => 'InvocationType',
        'qualifier'      => 'Qualifier',
        'serviceName'    => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->concurrency) {
            $res['Concurrency'] = null !== $this->concurrency ? $this->concurrency->toMap() : null;
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
