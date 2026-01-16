<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\EnableKibanaPvlNetworkRequest\vSwitchIdsZone;

class EnableKibanaPvlNetworkRequest extends Model
{
    /**
     * @var string
     */
    public $endpointName;

    /**
     * @var string[]
     */
    public $securityGroups;

    /**
     * @var vSwitchIdsZone[]
     */
    public $vSwitchIdsZone;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'endpointName' => 'endpointName',
        'securityGroups' => 'securityGroups',
        'vSwitchIdsZone' => 'vSwitchIdsZone',
        'vpcId' => 'vpcId',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        if (\is_array($this->securityGroups)) {
            Model::validateArray($this->securityGroups);
        }
        if (\is_array($this->vSwitchIdsZone)) {
            Model::validateArray($this->vSwitchIdsZone);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointName) {
            $res['endpointName'] = $this->endpointName;
        }

        if (null !== $this->securityGroups) {
            if (\is_array($this->securityGroups)) {
                $res['securityGroups'] = [];
                $n1 = 0;
                foreach ($this->securityGroups as $item1) {
                    $res['securityGroups'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vSwitchIdsZone) {
            if (\is_array($this->vSwitchIdsZone)) {
                $res['vSwitchIdsZone'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIdsZone as $item1) {
                    $res['vSwitchIdsZone'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['endpointName'])) {
            $model->endpointName = $map['endpointName'];
        }

        if (isset($map['securityGroups'])) {
            if (!empty($map['securityGroups'])) {
                $model->securityGroups = [];
                $n1 = 0;
                foreach ($map['securityGroups'] as $item1) {
                    $model->securityGroups[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['vSwitchIdsZone'])) {
            if (!empty($map['vSwitchIdsZone'])) {
                $model->vSwitchIdsZone = [];
                $n1 = 0;
                foreach ($map['vSwitchIdsZone'] as $item1) {
                    $model->vSwitchIdsZone[$n1] = vSwitchIdsZone::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
