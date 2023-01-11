<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackOperationRisksResponseBody\riskResources;
use AlibabaCloud\Tea\Model;

class ListStackOperationRisksResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $missingPolicyActions;

    /**
     * @example 72108E7A-E874-4A5E-B22C-A61E94AD12CD
     *
     * @var string
     */
    public $requestId;

    /**
     * @var riskResources[]
     */
    public $riskResources;
    protected $_name = [
        'missingPolicyActions' => 'MissingPolicyActions',
        'requestId'            => 'RequestId',
        'riskResources'        => 'RiskResources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->missingPolicyActions) {
            $res['MissingPolicyActions'] = $this->missingPolicyActions;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->riskResources) {
            $res['RiskResources'] = [];
            if (null !== $this->riskResources && \is_array($this->riskResources)) {
                $n = 0;
                foreach ($this->riskResources as $item) {
                    $res['RiskResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStackOperationRisksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MissingPolicyActions'])) {
            if (!empty($map['MissingPolicyActions'])) {
                $model->missingPolicyActions = $map['MissingPolicyActions'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RiskResources'])) {
            if (!empty($map['RiskResources'])) {
                $model->riskResources = [];
                $n                    = 0;
                foreach ($map['RiskResources'] as $item) {
                    $model->riskResources[$n++] = null !== $item ? riskResources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
