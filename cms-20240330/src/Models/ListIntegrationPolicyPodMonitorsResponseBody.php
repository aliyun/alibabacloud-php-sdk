<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyPodMonitorsResponseBody\podMonitors;

class ListIntegrationPolicyPodMonitorsResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var podMonitors[]
     */
    public $podMonitors;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterId' => 'clusterId',
        'podMonitors' => 'podMonitors',
        'policyId' => 'policyId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->podMonitors)) {
            Model::validateArray($this->podMonitors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }

        if (null !== $this->podMonitors) {
            if (\is_array($this->podMonitors)) {
                $res['podMonitors'] = [];
                $n1 = 0;
                foreach ($this->podMonitors as $item1) {
                    $res['podMonitors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->policyId) {
            $res['policyId'] = $this->policyId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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

        if (isset($map['podMonitors'])) {
            if (!empty($map['podMonitors'])) {
                $model->podMonitors = [];
                $n1 = 0;
                foreach ($map['podMonitors'] as $item1) {
                    $model->podMonitors[$n1] = podMonitors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['policyId'])) {
            $model->policyId = $map['policyId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
