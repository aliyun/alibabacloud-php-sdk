<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class HttpApiSystemParameters extends Model
{
    /**
     * @var HttpApiSystemParameterMapping[]
     */
    public $headerParameters;

    /**
     * @var HttpApiSystemParameterMapping[]
     */
    public $queryParameters;
    protected $_name = [
        'headerParameters' => 'headerParameters',
        'queryParameters' => 'queryParameters',
    ];

    public function validate()
    {
        if (\is_array($this->headerParameters)) {
            Model::validateArray($this->headerParameters);
        }
        if (\is_array($this->queryParameters)) {
            Model::validateArray($this->queryParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->headerParameters) {
            if (\is_array($this->headerParameters)) {
                $res['headerParameters'] = [];
                $n1 = 0;
                foreach ($this->headerParameters as $item1) {
                    $res['headerParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->queryParameters) {
            if (\is_array($this->queryParameters)) {
                $res['queryParameters'] = [];
                $n1 = 0;
                foreach ($this->queryParameters as $item1) {
                    $res['queryParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['headerParameters'])) {
            if (!empty($map['headerParameters'])) {
                $model->headerParameters = [];
                $n1 = 0;
                foreach ($map['headerParameters'] as $item1) {
                    $model->headerParameters[$n1] = HttpApiSystemParameterMapping::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['queryParameters'])) {
            if (!empty($map['queryParameters'])) {
                $model->queryParameters = [];
                $n1 = 0;
                foreach ($map['queryParameters'] as $item1) {
                    $model->queryParameters[$n1] = HttpApiSystemParameterMapping::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
