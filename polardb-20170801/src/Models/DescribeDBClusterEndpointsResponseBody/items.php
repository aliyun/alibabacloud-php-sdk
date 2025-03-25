<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterEndpointsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterEndpointsResponseBody\items\addressItems;

class items extends Model
{
    /**
     * @var addressItems[]
     */
    public $addressItems;

    /**
     * @var string
     */
    public $autoAddNewNodes;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBEndpointDescription;

    /**
     * @var string
     */
    public $DBEndpointId;

    /**
     * @var string
     */
    public $endpointConfig;

    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var string
     */
    public $nodeWithRoles;

    /**
     * @var string
     */
    public $nodes;

    /**
     * @var string
     */
    public $polarSccTimeoutAction;

    /**
     * @var string
     */
    public $polarSccWaitTimeout;

    /**
     * @var string
     */
    public $readWriteMode;

    /**
     * @var string
     */
    public $sccMode;
    protected $_name = [
        'addressItems' => 'AddressItems',
        'autoAddNewNodes' => 'AutoAddNewNodes',
        'DBClusterId' => 'DBClusterId',
        'DBEndpointDescription' => 'DBEndpointDescription',
        'DBEndpointId' => 'DBEndpointId',
        'endpointConfig' => 'EndpointConfig',
        'endpointType' => 'EndpointType',
        'nodeWithRoles' => 'NodeWithRoles',
        'nodes' => 'Nodes',
        'polarSccTimeoutAction' => 'PolarSccTimeoutAction',
        'polarSccWaitTimeout' => 'PolarSccWaitTimeout',
        'readWriteMode' => 'ReadWriteMode',
        'sccMode' => 'SccMode',
    ];

    public function validate()
    {
        if (\is_array($this->addressItems)) {
            Model::validateArray($this->addressItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressItems) {
            if (\is_array($this->addressItems)) {
                $res['AddressItems'] = [];
                $n1 = 0;
                foreach ($this->addressItems as $item1) {
                    $res['AddressItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->autoAddNewNodes) {
            $res['AutoAddNewNodes'] = $this->autoAddNewNodes;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBEndpointDescription) {
            $res['DBEndpointDescription'] = $this->DBEndpointDescription;
        }

        if (null !== $this->DBEndpointId) {
            $res['DBEndpointId'] = $this->DBEndpointId;
        }

        if (null !== $this->endpointConfig) {
            $res['EndpointConfig'] = $this->endpointConfig;
        }

        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }

        if (null !== $this->nodeWithRoles) {
            $res['NodeWithRoles'] = $this->nodeWithRoles;
        }

        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }

        if (null !== $this->polarSccTimeoutAction) {
            $res['PolarSccTimeoutAction'] = $this->polarSccTimeoutAction;
        }

        if (null !== $this->polarSccWaitTimeout) {
            $res['PolarSccWaitTimeout'] = $this->polarSccWaitTimeout;
        }

        if (null !== $this->readWriteMode) {
            $res['ReadWriteMode'] = $this->readWriteMode;
        }

        if (null !== $this->sccMode) {
            $res['SccMode'] = $this->sccMode;
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
        if (isset($map['AddressItems'])) {
            if (!empty($map['AddressItems'])) {
                $model->addressItems = [];
                $n1 = 0;
                foreach ($map['AddressItems'] as $item1) {
                    $model->addressItems[$n1++] = addressItems::fromMap($item1);
                }
            }
        }

        if (isset($map['AutoAddNewNodes'])) {
            $model->autoAddNewNodes = $map['AutoAddNewNodes'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBEndpointDescription'])) {
            $model->DBEndpointDescription = $map['DBEndpointDescription'];
        }

        if (isset($map['DBEndpointId'])) {
            $model->DBEndpointId = $map['DBEndpointId'];
        }

        if (isset($map['EndpointConfig'])) {
            $model->endpointConfig = $map['EndpointConfig'];
        }

        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }

        if (isset($map['NodeWithRoles'])) {
            $model->nodeWithRoles = $map['NodeWithRoles'];
        }

        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }

        if (isset($map['PolarSccTimeoutAction'])) {
            $model->polarSccTimeoutAction = $map['PolarSccTimeoutAction'];
        }

        if (isset($map['PolarSccWaitTimeout'])) {
            $model->polarSccWaitTimeout = $map['PolarSccWaitTimeout'];
        }

        if (isset($map['ReadWriteMode'])) {
            $model->readWriteMode = $map['ReadWriteMode'];
        }

        if (isset($map['SccMode'])) {
            $model->sccMode = $map['SccMode'];
        }

        return $model;
    }
}
