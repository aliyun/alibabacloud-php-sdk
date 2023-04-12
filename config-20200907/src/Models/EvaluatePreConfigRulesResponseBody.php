<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\EvaluatePreConfigRulesResponseBody\resourceEvaluations;
use AlibabaCloud\Tea\Model;

class EvaluatePreConfigRulesResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 129ECF1C-7897-1131-BD0F-4B588AC05400
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the compliance evaluation result.
     *
     * @var resourceEvaluations[]
     */
    public $resourceEvaluations;
    protected $_name = [
        'requestId'           => 'RequestId',
        'resourceEvaluations' => 'ResourceEvaluations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceEvaluations) {
            $res['ResourceEvaluations'] = [];
            if (null !== $this->resourceEvaluations && \is_array($this->resourceEvaluations)) {
                $n = 0;
                foreach ($this->resourceEvaluations as $item) {
                    $res['ResourceEvaluations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EvaluatePreConfigRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceEvaluations'])) {
            if (!empty($map['ResourceEvaluations'])) {
                $model->resourceEvaluations = [];
                $n                          = 0;
                foreach ($map['ResourceEvaluations'] as $item) {
                    $model->resourceEvaluations[$n++] = null !== $item ? resourceEvaluations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
