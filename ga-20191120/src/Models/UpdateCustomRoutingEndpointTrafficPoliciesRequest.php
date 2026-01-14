<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointTrafficPoliciesRequest\policyConfigurations;

class UpdateCustomRoutingEndpointTrafficPoliciesRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var policyConfigurations[]
     */
    public $policyConfigurations;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'endpointId' => 'EndpointId',
        'policyConfigurations' => 'PolicyConfigurations',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->policyConfigurations)) {
            Model::validateArray($this->policyConfigurations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->policyConfigurations) {
            if (\is_array($this->policyConfigurations)) {
                $res['PolicyConfigurations'] = [];
                $n1 = 0;
                foreach ($this->policyConfigurations as $item1) {
                    $res['PolicyConfigurations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['PolicyConfigurations'])) {
            if (!empty($map['PolicyConfigurations'])) {
                $model->policyConfigurations = [];
                $n1 = 0;
                foreach ($map['PolicyConfigurations'] as $item1) {
                    $model->policyConfigurations[$n1] = policyConfigurations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
