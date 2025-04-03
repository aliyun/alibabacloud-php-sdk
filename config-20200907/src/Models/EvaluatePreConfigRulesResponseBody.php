<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\EvaluatePreConfigRulesResponseBody\resourceEvaluations;

class EvaluatePreConfigRulesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceEvaluations[]
     */
    public $resourceEvaluations;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceEvaluations' => 'ResourceEvaluations',
    ];

    public function validate()
    {
        if (\is_array($this->resourceEvaluations)) {
            Model::validateArray($this->resourceEvaluations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceEvaluations) {
            if (\is_array($this->resourceEvaluations)) {
                $res['ResourceEvaluations'] = [];
                $n1 = 0;
                foreach ($this->resourceEvaluations as $item1) {
                    $res['ResourceEvaluations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['ResourceEvaluations'])) {
            if (!empty($map['ResourceEvaluations'])) {
                $model->resourceEvaluations = [];
                $n1 = 0;
                foreach ($map['ResourceEvaluations'] as $item1) {
                    $model->resourceEvaluations[$n1++] = resourceEvaluations::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
