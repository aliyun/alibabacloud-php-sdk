<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListKibanaPvlNetworkResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListKibanaPvlNetworkResponseBody\result\vSwitchIdsZone;

class result extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $endpointName;

    /**
     * @var string
     */
    public $endpointStatus;

    /**
     * @var string
     */
    public $pvlId;

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
    protected $_name = [
        'createTime' => 'createTime',
        'endpointId' => 'endpointId',
        'endpointName' => 'endpointName',
        'endpointStatus' => 'endpointStatus',
        'pvlId' => 'pvlId',
        'securityGroups' => 'securityGroups',
        'vSwitchIdsZone' => 'vSwitchIdsZone',
        'vpcId' => 'vpcId',
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
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->endpointId) {
            $res['endpointId'] = $this->endpointId;
        }

        if (null !== $this->endpointName) {
            $res['endpointName'] = $this->endpointName;
        }

        if (null !== $this->endpointStatus) {
            $res['endpointStatus'] = $this->endpointStatus;
        }

        if (null !== $this->pvlId) {
            $res['pvlId'] = $this->pvlId;
        }

        if (null !== $this->securityGroups) {
            if (\is_array($this->securityGroups)) {
                $res['securityGroups'] = [];
                $n1 = 0;
                foreach ($this->securityGroups as $item1) {
                    $res['securityGroups'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->vSwitchIdsZone) {
            if (\is_array($this->vSwitchIdsZone)) {
                $res['vSwitchIdsZone'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIdsZone as $item1) {
                    $res['vSwitchIdsZone'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['endpointId'])) {
            $model->endpointId = $map['endpointId'];
        }

        if (isset($map['endpointName'])) {
            $model->endpointName = $map['endpointName'];
        }

        if (isset($map['endpointStatus'])) {
            $model->endpointStatus = $map['endpointStatus'];
        }

        if (isset($map['pvlId'])) {
            $model->pvlId = $map['pvlId'];
        }

        if (isset($map['securityGroups'])) {
            if (!empty($map['securityGroups'])) {
                $model->securityGroups = [];
                $n1 = 0;
                foreach ($map['securityGroups'] as $item1) {
                    $model->securityGroups[$n1++] = $item1;
                }
            }
        }

        if (isset($map['vSwitchIdsZone'])) {
            if (!empty($map['vSwitchIdsZone'])) {
                $model->vSwitchIdsZone = [];
                $n1 = 0;
                foreach ($map['vSwitchIdsZone'] as $item1) {
                    $model->vSwitchIdsZone[$n1++] = vSwitchIdsZone::fromMap($item1);
                }
            }
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
