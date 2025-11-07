<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetParametersResponseBody\parameters;

class GetParametersResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $invalidParameters;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'invalidParameters' => 'InvalidParameters',
        'parameters' => 'Parameters',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->invalidParameters)) {
            Model::validateArray($this->invalidParameters);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invalidParameters) {
            if (\is_array($this->invalidParameters)) {
                $res['InvalidParameters'] = [];
                $n1 = 0;
                foreach ($this->invalidParameters as $item1) {
                    $res['InvalidParameters'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                $n1 = 0;
                foreach ($this->parameters as $item1) {
                    $res['Parameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InvalidParameters'])) {
            if (!empty($map['InvalidParameters'])) {
                $model->invalidParameters = [];
                $n1 = 0;
                foreach ($map['InvalidParameters'] as $item1) {
                    $model->invalidParameters[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n1 = 0;
                foreach ($map['Parameters'] as $item1) {
                    $model->parameters[$n1] = parameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
