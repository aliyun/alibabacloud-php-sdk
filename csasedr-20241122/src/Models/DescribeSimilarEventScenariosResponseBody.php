<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CsasEdr\V20241122\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeSimilarEventScenariosResponseBody\securityEventSimilarEventScenarioResponse;

class DescribeSimilarEventScenariosResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityEventSimilarEventScenarioResponse[]
     */
    public $securityEventSimilarEventScenarioResponse;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityEventSimilarEventScenarioResponse' => 'SecurityEventSimilarEventScenarioResponse',
    ];

    public function validate()
    {
        if (\is_array($this->securityEventSimilarEventScenarioResponse)) {
            Model::validateArray($this->securityEventSimilarEventScenarioResponse);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityEventSimilarEventScenarioResponse) {
            if (\is_array($this->securityEventSimilarEventScenarioResponse)) {
                $res['SecurityEventSimilarEventScenarioResponse'] = [];
                $n1 = 0;
                foreach ($this->securityEventSimilarEventScenarioResponse as $item1) {
                    $res['SecurityEventSimilarEventScenarioResponse'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityEventSimilarEventScenarioResponse'])) {
            if (!empty($map['SecurityEventSimilarEventScenarioResponse'])) {
                $model->securityEventSimilarEventScenarioResponse = [];
                $n1 = 0;
                foreach ($map['SecurityEventSimilarEventScenarioResponse'] as $item1) {
                    $model->securityEventSimilarEventScenarioResponse[$n1] = securityEventSimilarEventScenarioResponse::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
