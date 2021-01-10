<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models;

use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeConnectorCapabilityResponseBody\connections;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeConnectorCapabilityResponseBody\connector;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeConnectorCapabilityResponseBody\parameters;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeConnectorCapabilityResponseBody\responses;
use AlibabaCloud\Tea\Model;

class DescribeConnectorCapabilityResponseBody extends Model
{
    /**
     * @var connections[]
     */
    public $connections;

    /**
     * @var connector
     */
    public $connector;

    /**
     * @var string
     */
    public $type;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $documentUrl;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var string
     */
    public $defaultInputs;

    /**
     * @var bool
     */
    public $system;

    /**
     * @var string
     */
    public $name;

    /**
     * @var responses[]
     */
    public $responses;
    protected $_name = [
        'connections'   => 'Connections',
        'connector'     => 'Connector',
        'type'          => 'Type',
        'parameters'    => 'Parameters',
        'requestId'     => 'RequestId',
        'displayName'   => 'DisplayName',
        'documentUrl'   => 'DocumentUrl',
        'visibility'    => 'Visibility',
        'defaultInputs' => 'DefaultInputs',
        'system'        => 'System',
        'name'          => 'Name',
        'responses'     => 'Responses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connections) {
            $res['Connections'] = [];
            if (null !== $this->connections && \is_array($this->connections)) {
                $n = 0;
                foreach ($this->connections as $item) {
                    $res['Connections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->connector) {
            $res['Connector'] = null !== $this->connector ? $this->connector->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->documentUrl) {
            $res['DocumentUrl'] = $this->documentUrl;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }
        if (null !== $this->defaultInputs) {
            $res['DefaultInputs'] = $this->defaultInputs;
        }
        if (null !== $this->system) {
            $res['System'] = $this->system;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->responses) {
            $res['Responses'] = [];
            if (null !== $this->responses && \is_array($this->responses)) {
                $n = 0;
                foreach ($this->responses as $item) {
                    $res['Responses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConnectorCapabilityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Connections'])) {
            if (!empty($map['Connections'])) {
                $model->connections = [];
                $n                  = 0;
                foreach ($map['Connections'] as $item) {
                    $model->connections[$n++] = null !== $item ? connections::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Connector'])) {
            $model->connector = connector::fromMap($map['Connector']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['DocumentUrl'])) {
            $model->documentUrl = $map['DocumentUrl'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }
        if (isset($map['DefaultInputs'])) {
            $model->defaultInputs = $map['DefaultInputs'];
        }
        if (isset($map['System'])) {
            $model->system = $map['System'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Responses'])) {
            if (!empty($map['Responses'])) {
                $model->responses = [];
                $n                = 0;
                foreach ($map['Responses'] as $item) {
                    $model->responses[$n++] = null !== $item ? responses::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
