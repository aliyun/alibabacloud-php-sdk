<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackOperationRisksResponseBody\riskResources;

class ListStackOperationRisksResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $missingPolicyActions;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var riskResources[]
     */
    public $riskResources;
    protected $_name = [
        'missingPolicyActions' => 'MissingPolicyActions',
        'requestId' => 'RequestId',
        'riskResources' => 'RiskResources',
    ];

    public function validate()
    {
        if (\is_array($this->missingPolicyActions)) {
            Model::validateArray($this->missingPolicyActions);
        }
        if (\is_array($this->riskResources)) {
            Model::validateArray($this->riskResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->missingPolicyActions) {
            if (\is_array($this->missingPolicyActions)) {
                $res['MissingPolicyActions'] = [];
                $n1 = 0;
                foreach ($this->missingPolicyActions as $item1) {
                    $res['MissingPolicyActions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskResources) {
            if (\is_array($this->riskResources)) {
                $res['RiskResources'] = [];
                $n1 = 0;
                foreach ($this->riskResources as $item1) {
                    $res['RiskResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MissingPolicyActions'])) {
            if (!empty($map['MissingPolicyActions'])) {
                $model->missingPolicyActions = [];
                $n1 = 0;
                foreach ($map['MissingPolicyActions'] as $item1) {
                    $model->missingPolicyActions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskResources'])) {
            if (!empty($map['RiskResources'])) {
                $model->riskResources = [];
                $n1 = 0;
                foreach ($map['RiskResources'] as $item1) {
                    $model->riskResources[$n1] = riskResources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
