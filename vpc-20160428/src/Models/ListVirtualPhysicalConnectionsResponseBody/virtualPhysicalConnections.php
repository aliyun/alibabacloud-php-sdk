<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListVirtualPhysicalConnectionsResponseBody;

use AlibabaCloud\Tea\Model;

class virtualPhysicalConnections extends Model
{
    /**
     * @example ap-cn-hangzhou-finance-yh-E
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @var string
     */
    public $adLocation;

    /**
     * @example 253460731706911258
     *
     * @var string
     */
    public $aliUid;

    /**
     * @example 50
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @example Prepaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example longtel001
     *
     * @var string
     */
    public $circuitCode;

    /**
     * @example 2021-06-08T12:20:55
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @example 2021-10-08T10:44Z
     *
     * @var string
     */
    public $enabledTime;

    /**
     * @example 2021-11-08T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 50M
     *
     * @var string
     */
    public $expectSpec;

    /**
     * @example CU
     *
     * @var string
     */
    public $lineOperator;

    /**
     * @example Available
     *
     * @var string
     */
    public $loaStatus;

    /**
     * @example nametest
     *
     * @var string
     */
    public $name;

    /**
     * @example PayByPhysicalConnectionOwner
     *
     * @var string
     */
    public $orderMode;

    /**
     * @example 283117732402483989
     *
     * @var string
     */
    public $parentPhysicalConnectionAliUid;

    /**
     * @example pc-bp1ciz7ekd2grn1as****
     *
     * @var string
     */
    public $parentPhysicalConnectionId;

    /**
     * @var string
     */
    public $peerLocation;

    /**
     * @example pc-bp1mrgfbtmc9brre7****
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @example 80
     *
     * @var string
     */
    public $portNumber;

    /**
     * @example 10GBase-LR
     *
     * @var string
     */
    public $portType;

    /**
     * @example VirtualPhysicalConnection
     *
     * @var string
     */
    public $productType;

    /**
     * @example pc-119mfjzm****
     *
     * @var string
     */
    public $redundantPhysicalConnectionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 50M
     *
     * @var string
     */
    public $spec;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @example VPC
     *
     * @var string
     */
    public $type;

    /**
     * @example Confirmed
     *
     * @var string
     */
    public $virtualPhysicalConnectionStatus;

    /**
     * @example 10
     *
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
        'type'                            => 'Type',
        'virtualPhysicalConnectionStatus' => 'VirtualPhysicalConnectionStatus',
        'vlanId'                          => 'VlanId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return virtualPhysicalConnections
     */
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
