<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePhysicalConnectionsResponseBody\physicalConnectionSet;

use AlibabaCloud\Tea\Model;

class physicalConnectionType extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $adLocation;

    /**
     * @var string
     */
    public $portNumber;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $circuitCode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $portType;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $enabledTime;

    /**
     * @var string
     */
    public $lineOperator;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $redundantPhysicalConnectionId;

    /**
     * @var string
     */
    public $peerLocation;

    /**
     * @var string
     */
    public $accessPointId;

    /**
     * @var string
     */
    public $physicalConnectionId;
    protected $_name = [
        'type'                          => 'Type',
        'status'                        => 'Status',
        'creationTime'                  => 'CreationTime',
        'adLocation'                    => 'AdLocation',
        'portNumber'                    => 'PortNumber',
        'spec'                          => 'Spec',
        'circuitCode'                   => 'CircuitCode',
        'description'                   => 'Description',
        'bandwidth'                     => 'Bandwidth',
        'portType'                      => 'PortType',
        'businessStatus'                => 'BusinessStatus',
        'enabledTime'                   => 'EnabledTime',
        'lineOperator'                  => 'LineOperator',
        'name'                          => 'Name',
        'redundantPhysicalConnectionId' => 'RedundantPhysicalConnectionId',
        'peerLocation'                  => 'PeerLocation',
        'accessPointId'                 => 'AccessPointId',
        'physicalConnectionId'          => 'PhysicalConnectionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->adLocation) {
            $res['AdLocation'] = $this->adLocation;
        }
        if (null !== $this->portNumber) {
            $res['PortNumber'] = $this->portNumber;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->portType) {
            $res['PortType'] = $this->portType;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->enabledTime) {
            $res['EnabledTime'] = $this->enabledTime;
        }
        if (null !== $this->lineOperator) {
            $res['LineOperator'] = $this->lineOperator;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->redundantPhysicalConnectionId) {
            $res['RedundantPhysicalConnectionId'] = $this->redundantPhysicalConnectionId;
        }
        if (null !== $this->peerLocation) {
            $res['PeerLocation'] = $this->peerLocation;
        }
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return physicalConnectionType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['AdLocation'])) {
            $model->adLocation = $map['AdLocation'];
        }
        if (isset($map['PortNumber'])) {
            $model->portNumber = $map['PortNumber'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['PortType'])) {
            $model->portType = $map['PortType'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['EnabledTime'])) {
            $model->enabledTime = $map['EnabledTime'];
        }
        if (isset($map['LineOperator'])) {
            $model->lineOperator = $map['LineOperator'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RedundantPhysicalConnectionId'])) {
            $model->redundantPhysicalConnectionId = $map['RedundantPhysicalConnectionId'];
        }
        if (isset($map['PeerLocation'])) {
            $model->peerLocation = $map['PeerLocation'];
        }
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
        }

        return $model;
    }
}
