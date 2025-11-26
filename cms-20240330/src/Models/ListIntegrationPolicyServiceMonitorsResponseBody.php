<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyServiceMonitorsResponseBody\serviceMonitors;

class ListIntegrationPolicyServiceMonitorsResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serviceMonitors[]
     */
    public $serviceMonitors;
    protected $_name = [
        'clusterId' => 'clusterId',
        'policyId' => 'policyId',
        'requestId' => 'requestId',
        'serviceMonitors' => 'serviceMonitors',
    ];

    public function validate()
    {
        if (\is_array($this->serviceMonitors)) {
            Model::validateArray($this->serviceMonitors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }

        if (null !== $this->policyId) {
            $res['policyId'] = $this->policyId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->serviceMonitors) {
            if (\is_array($this->serviceMonitors)) {
                $res['serviceMonitors'] = [];
                $n1 = 0;
                foreach ($this->serviceMonitors as $item1) {
                    $res['serviceMonitors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        if (isset($map['policyId'])) {
            $model->policyId = $map['policyId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['serviceMonitors'])) {
            if (!empty($map['serviceMonitors'])) {
                $model->serviceMonitors = [];
                $n1 = 0;
                foreach ($map['serviceMonitors'] as $item1) {
                    $model->serviceMonitors[$n1] = serviceMonitors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
