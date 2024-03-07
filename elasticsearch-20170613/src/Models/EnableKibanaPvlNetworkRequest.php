<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\EnableKibanaPvlNetworkRequest\vSwitchIdsZone;
use AlibabaCloud\Tea\Model;

class EnableKibanaPvlNetworkRequest extends Model
{
    /**
     * @example es-cn-27a3mul6l000xxx-kibana-endpoint
     *
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
     * @example vpc-xxx
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'endpointName'   => 'endpointName',
        'securityGroups' => 'securityGroups',
        'vSwitchIdsZone' => 'vSwitchIdsZone',
        'vpcId'          => 'vpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointName) {
            $res['endpointName'] = $this->endpointName;
        }
        if (null !== $this->securityGroups) {
            $res['securityGroups'] = $this->securityGroups;
        }
        if (null !== $this->vSwitchIdsZone) {
            $res['vSwitchIdsZone'] = [];
            if (null !== $this->vSwitchIdsZone && \is_array($this->vSwitchIdsZone)) {
                $n = 0;
                foreach ($this->vSwitchIdsZone as $item) {
                    $res['vSwitchIdsZone'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableKibanaPvlNetworkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endpointName'])) {
            $model->endpointName = $map['endpointName'];
        }
        if (isset($map['securityGroups'])) {
            if (!empty($map['securityGroups'])) {
                $model->securityGroups = $map['securityGroups'];
            }
        }
        if (isset($map['vSwitchIdsZone'])) {
            if (!empty($map['vSwitchIdsZone'])) {
                $model->vSwitchIdsZone = [];
                $n                     = 0;
                foreach ($map['vSwitchIdsZone'] as $item) {
                    $model->vSwitchIdsZone[$n++] = null !== $item ? vSwitchIdsZone::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
