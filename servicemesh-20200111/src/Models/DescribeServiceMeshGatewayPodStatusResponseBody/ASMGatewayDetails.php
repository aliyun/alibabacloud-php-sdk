<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshGatewayPodStatusResponseBody;

use AlibabaCloud\Tea\Model;

class ASMGatewayDetails extends Model
{
    /**
     * @var string
     */
    public $clusterID;

    /**
     * @var string
     */
    public $gatewayName;

    /**
     * @var int
     */
    public $readyPodNum;

    /**
     * @var int
     */
    public $specPodNum;
    protected $_name = [
        'clusterID'   => 'ClusterID',
        'gatewayName' => 'GatewayName',
        'readyPodNum' => 'ReadyPodNum',
        'specPodNum'  => 'SpecPodNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterID) {
            $res['ClusterID'] = $this->clusterID;
        }
        if (null !== $this->gatewayName) {
            $res['GatewayName'] = $this->gatewayName;
        }
        if (null !== $this->readyPodNum) {
            $res['ReadyPodNum'] = $this->readyPodNum;
        }
        if (null !== $this->specPodNum) {
            $res['SpecPodNum'] = $this->specPodNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ASMGatewayDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterID'])) {
            $model->clusterID = $map['ClusterID'];
        }
        if (isset($map['GatewayName'])) {
            $model->gatewayName = $map['GatewayName'];
        }
        if (isset($map['ReadyPodNum'])) {
            $model->readyPodNum = $map['ReadyPodNum'];
        }
        if (isset($map['SpecPodNum'])) {
            $model->specPodNum = $map['SpecPodNum'];
        }

        return $model;
    }
}
