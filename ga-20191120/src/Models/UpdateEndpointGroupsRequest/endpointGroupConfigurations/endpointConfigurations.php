<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateEndpointGroupsRequest\endpointGroupConfigurations;

use AlibabaCloud\Dara\Model;

class endpointConfigurations extends Model
{
    /**
     * @var string[]
     */
    public $apiKeys;

    /**
     * @var bool
     */
    public $enableClientIPPreservation;

    /**
     * @var bool
     */
    public $enableProxyProtocol;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $subAddress;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'apiKeys' => 'ApiKeys',
        'enableClientIPPreservation' => 'EnableClientIPPreservation',
        'enableProxyProtocol' => 'EnableProxyProtocol',
        'endpoint' => 'Endpoint',
        'provider' => 'Provider',
        'subAddress' => 'SubAddress',
        'type' => 'Type',
        'vSwitchIds' => 'VSwitchIds',
        'vpcId' => 'VpcId',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        if (\is_array($this->apiKeys)) {
            Model::validateArray($this->apiKeys);
        }
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeys) {
            if (\is_array($this->apiKeys)) {
                $res['ApiKeys'] = [];
                $n1 = 0;
                foreach ($this->apiKeys as $item1) {
                    $res['ApiKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableClientIPPreservation) {
            $res['EnableClientIPPreservation'] = $this->enableClientIPPreservation;
        }

        if (null !== $this->enableProxyProtocol) {
            $res['EnableProxyProtocol'] = $this->enableProxyProtocol;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }

        if (null !== $this->subAddress) {
            $res['SubAddress'] = $this->subAddress;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['ApiKeys'])) {
            if (!empty($map['ApiKeys'])) {
                $model->apiKeys = [];
                $n1 = 0;
                foreach ($map['ApiKeys'] as $item1) {
                    $model->apiKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EnableClientIPPreservation'])) {
            $model->enableClientIPPreservation = $map['EnableClientIPPreservation'];
        }

        if (isset($map['EnableProxyProtocol'])) {
            $model->enableProxyProtocol = $map['EnableProxyProtocol'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }

        if (isset($map['SubAddress'])) {
            $model->subAddress = $map['SubAddress'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = [];
                $n1 = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
