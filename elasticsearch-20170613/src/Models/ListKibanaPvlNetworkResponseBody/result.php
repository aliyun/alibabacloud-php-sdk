<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListKibanaPvlNetworkResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListKibanaPvlNetworkResponseBody\result\vSwitchIdsZone;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 2024-03-07T06:26:28Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example ep-bp1tah7zbrwmkjef****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @example es-cn-xxdjfia****-kibana
     *
     * @var string
     */
    public $endpointName;

    /**
     * @example Connected
     *
     * @var string
     */
    public $endpointStatus;

    /**
     * @example es-cn-27a3mul6l***-kibana-internal
     *
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
     * @example vpc-bp16k1dvzxtma*****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'createTime'     => 'createTime',
        'endpointId'     => 'endpointId',
        'endpointName'   => 'endpointName',
        'endpointStatus' => 'endpointStatus',
        'pvlId'          => 'pvlId',
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
     * @return result
     */
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
