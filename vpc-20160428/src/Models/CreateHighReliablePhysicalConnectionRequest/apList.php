<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionRequest;

use AlibabaCloud\Dara\Model;

class apList extends Model
{
    /**
     * @var string
     */
    public $accessPointId;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $circuitCode;

    /**
     * @var string
     */
    public $description;

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
    public $opticalModuleModel;

    /**
     * @var string
     */
    public $peerLocation;

    /**
     * @var int
     */
    public $portNum;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'accessPointId' => 'AccessPointId',
        'bandwidth' => 'Bandwidth',
        'circuitCode' => 'CircuitCode',
        'description' => 'Description',
        'lineOperator' => 'LineOperator',
        'name' => 'Name',
        'opticalModuleModel' => 'OpticalModuleModel',
        'peerLocation' => 'PeerLocation',
        'portNum' => 'PortNum',
        'regionId' => 'RegionId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->lineOperator) {
            $res['LineOperator'] = $this->lineOperator;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->opticalModuleModel) {
            $res['OpticalModuleModel'] = $this->opticalModuleModel;
        }

        if (null !== $this->peerLocation) {
            $res['PeerLocation'] = $this->peerLocation;
        }

        if (null !== $this->portNum) {
            $res['PortNum'] = $this->portNum;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['LineOperator'])) {
            $model->lineOperator = $map['LineOperator'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OpticalModuleModel'])) {
            $model->opticalModuleModel = $map['OpticalModuleModel'];
        }

        if (isset($map['PeerLocation'])) {
            $model->peerLocation = $map['PeerLocation'];
        }

        if (isset($map['PortNum'])) {
            $model->portNum = $map['PortNum'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
