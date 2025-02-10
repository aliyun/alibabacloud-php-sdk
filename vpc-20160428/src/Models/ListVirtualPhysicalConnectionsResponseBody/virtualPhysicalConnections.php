<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListVirtualPhysicalConnectionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVirtualPhysicalConnectionsResponseBody\virtualPhysicalConnections\tags;

class virtualPhysicalConnections extends Model
{
    /**
     * @var string
     */
    public $accessPointId;
    /**
     * @var string
     */
    public $adLocation;
    /**
     * @var string
     */
    public $aliUid;
    /**
     * @var int
     */
    public $bandwidth;
    /**
     * @var string
     */
    public $businessStatus;
    /**
     * @var string
     */
    public $chargeType;
    /**
     * @var string
     */
    public $circuitCode;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $enabledTime;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $expectSpec;
    /**
     * @var string
     */
    public $lineOperator;
    /**
     * @var string
     */
    public $loaStatus;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $orderMode;
    /**
     * @var string
     */
    public $parentPhysicalConnectionAliUid;
    /**
     * @var string
     */
    public $parentPhysicalConnectionId;
    /**
     * @var string
     */
    public $peerLocation;
    /**
     * @var string
     */
    public $physicalConnectionId;
    /**
     * @var string
     */
    public $portNumber;
    /**
     * @var string
     */
    public $portType;
    /**
     * @var string
     */
    public $productType;
    /**
     * @var string
     */
    public $redundantPhysicalConnectionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $spec;
    /**
     * @var string
     */
    public $status;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $virtualPhysicalConnectionStatus;
    /**
     * @var string
     */
    public $vlanId;
    protected $_name = [
        'accessPointId'                   => 'AccessPointId',
        'adLocation'                      => 'AdLocation',
        'aliUid'                          => 'AliUid',
        'bandwidth'                       => 'Bandwidth',
        'businessStatus'                  => 'BusinessStatus',
        'chargeType'                      => 'ChargeType',
        'circuitCode'                     => 'CircuitCode',
        'creationTime'                    => 'CreationTime',
        'description'                     => 'Description',
        'enabledTime'                     => 'EnabledTime',
        'endTime'                         => 'EndTime',
        'expectSpec'                      => 'ExpectSpec',
        'lineOperator'                    => 'LineOperator',
        'loaStatus'                       => 'LoaStatus',
        'name'                            => 'Name',
        'orderMode'                       => 'OrderMode',
        'parentPhysicalConnectionAliUid'  => 'ParentPhysicalConnectionAliUid',
        'parentPhysicalConnectionId'      => 'ParentPhysicalConnectionId',
        'peerLocation'                    => 'PeerLocation',
        'physicalConnectionId'            => 'PhysicalConnectionId',
        'portNumber'                      => 'PortNumber',
        'portType'                        => 'PortType',
        'productType'                     => 'ProductType',
        'redundantPhysicalConnectionId'   => 'RedundantPhysicalConnectionId',
        'resourceGroupId'                 => 'ResourceGroupId',
        'spec'                            => 'Spec',
        'status'                          => 'Status',
        'tags'                            => 'Tags',
        'type'                            => 'Type',
        'virtualPhysicalConnectionStatus' => 'VirtualPhysicalConnectionStatus',
        'vlanId'                          => 'VlanId',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }

        if (null !== $this->adLocation) {
            $res['AdLocation'] = $this->adLocation;
        }

        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enabledTime) {
            $res['EnabledTime'] = $this->enabledTime;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->expectSpec) {
            $res['ExpectSpec'] = $this->expectSpec;
        }

        if (null !== $this->lineOperator) {
            $res['LineOperator'] = $this->lineOperator;
        }

        if (null !== $this->loaStatus) {
            $res['LoaStatus'] = $this->loaStatus;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->orderMode) {
            $res['OrderMode'] = $this->orderMode;
        }

        if (null !== $this->parentPhysicalConnectionAliUid) {
            $res['ParentPhysicalConnectionAliUid'] = $this->parentPhysicalConnectionAliUid;
        }

        if (null !== $this->parentPhysicalConnectionId) {
            $res['ParentPhysicalConnectionId'] = $this->parentPhysicalConnectionId;
        }

        if (null !== $this->peerLocation) {
            $res['PeerLocation'] = $this->peerLocation;
        }

        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
        }

        if (null !== $this->portNumber) {
            $res['PortNumber'] = $this->portNumber;
        }

        if (null !== $this->portType) {
            $res['PortType'] = $this->portType;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->redundantPhysicalConnectionId) {
            $res['RedundantPhysicalConnectionId'] = $this->redundantPhysicalConnectionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->virtualPhysicalConnectionStatus) {
            $res['VirtualPhysicalConnectionStatus'] = $this->virtualPhysicalConnectionStatus;
        }

        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
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
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }

        if (isset($map['AdLocation'])) {
            $model->adLocation = $map['AdLocation'];
        }

        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnabledTime'])) {
            $model->enabledTime = $map['EnabledTime'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ExpectSpec'])) {
            $model->expectSpec = $map['ExpectSpec'];
        }

        if (isset($map['LineOperator'])) {
            $model->lineOperator = $map['LineOperator'];
        }

        if (isset($map['LoaStatus'])) {
            $model->loaStatus = $map['LoaStatus'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OrderMode'])) {
            $model->orderMode = $map['OrderMode'];
        }

        if (isset($map['ParentPhysicalConnectionAliUid'])) {
            $model->parentPhysicalConnectionAliUid = $map['ParentPhysicalConnectionAliUid'];
        }

        if (isset($map['ParentPhysicalConnectionId'])) {
            $model->parentPhysicalConnectionId = $map['ParentPhysicalConnectionId'];
        }

        if (isset($map['PeerLocation'])) {
            $model->peerLocation = $map['PeerLocation'];
        }

        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
        }

        if (isset($map['PortNumber'])) {
            $model->portNumber = $map['PortNumber'];
        }

        if (isset($map['PortType'])) {
            $model->portType = $map['PortType'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['RedundantPhysicalConnectionId'])) {
            $model->redundantPhysicalConnectionId = $map['RedundantPhysicalConnectionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VirtualPhysicalConnectionStatus'])) {
            $model->virtualPhysicalConnectionStatus = $map['VirtualPhysicalConnectionStatus'];
        }

        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }

        return $model;
    }
}
