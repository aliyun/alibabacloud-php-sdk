<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationParametersResponseBody\parameters;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationParametersResponseBody\parameterTemplates;

class DescribeApplicationParametersResponseBody extends Model
{
    /**
     * @var parameterTemplates
     */
    public $parameterTemplates;

    /**
     * @var parameters
     */
    public $parameters;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'parameterTemplates' => 'ParameterTemplates',
        'parameters' => 'Parameters',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->parameterTemplates) {
            $this->parameterTemplates->validate();
        }
        if (null !== $this->parameters) {
            $this->parameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameterTemplates) {
            $res['ParameterTemplates'] = null !== $this->parameterTemplates ? $this->parameterTemplates->toArray($noStream) : $this->parameterTemplates;
        }

        if (null !== $this->parameters) {
            $res['Parameters'] = null !== $this->parameters ? $this->parameters->toArray($noStream) : $this->parameters;
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
        if (isset($map['ParameterTemplates'])) {
            $model->parameterTemplates = parameterTemplates::fromMap($map['ParameterTemplates']);
        }

        if (isset($map['Parameters'])) {
            $model->parameters = parameters::fromMap($map['Parameters']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
