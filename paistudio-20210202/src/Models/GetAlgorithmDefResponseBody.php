<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Dara\Model;

class GetAlgorithmDefResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $spec;
    protected $_name = [
        'requestId' => 'RequestId',
        'spec' => 'Spec',
    ];

    public function validate()
    {
        if (\is_array($this->spec)) {
            Model::validateArray($this->spec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->spec) {
            if (\is_array($this->spec)) {
                $res['Spec'] = [];
                foreach ($this->spec as $key1 => $value1) {
                    $res['Spec'][$key1] = $value1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Spec'])) {
            if (!empty($map['Spec'])) {
                $model->spec = [];
                foreach ($map['Spec'] as $key1 => $value1) {
                    $model->spec[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
