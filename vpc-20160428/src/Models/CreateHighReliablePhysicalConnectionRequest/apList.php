<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionRequest;

use AlibabaCloud\Tea\Model;

class apList extends Model
{
    /**
     * @description The ID of the access point that is associated with the Express Connect circuit.
     *
     * > Two access points must be specified when **HighReliableType** is set to **MultiApMultiDevice** or **MultiApSingleDevice**. One access point must be specified when **HighReliableType** is set to **SingleApMultiDevice** or **SingleApMultiConnection**.
     *
     * This parameter is required.
     *
     * @example ap-cn-beijing-ft-A
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @description The maximum bandwidth of the hosted connection. Unit: Mbit/s.
     *
     * Valid values: 50, 100, 200, 300, 400, 500, 1000, 2000, 4000, 5000, 8000, and 10000.
     *
     * @example 50
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The circuit code of the Express Connect circuit, which is provided by the connectivity provider.
     *
     * @example longtel001
     *
     * @var string
     */
    public $circuitCode;

    /**
     * @description The description of the Express Connect circuit.
     *
     * The description must be 2 to 256 characters in length. It must start with a letter but cannot start with `http://` or `https://`.
     *
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @description The connectivity provider of the Express Connect circuit. Valid values:
     *
     *   **CT**: China Telecom.
     *   **CU**: China Unicom.
     *   **CM**: China Mobile.
     *   **CO**: other connectivity providers in the Chinese mainland.
     *   **Equinix**: Equinix.
     *   **Other**: other connectivity providers outside the Chinese mainland.
     *
     * This parameter is required.
     *
     * @example CT
     *
     * @var string
     */
    public $lineOperator;

    /**
     * @description The name of the Express Connect circuit.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, underscores (_), and hyphens (-). It must start with a letter but cannot start with `http://` or` https://`.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The geographical location of the data center.
     *
     * @example ram-test
     *
     * @var string
     */
    public $peerLocation;

    /**
     * @description The number of ports. Valid values: 2 to 16. This parameter is required only when **HighReliableType** is set to **SingleApMultiConnection**.
     *
     * @example 2
     *
     * @var int
     */
    public $portNum;

    /**
     * @description The region ID of the Express Connect circuit.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the Express Connect circuit. Default value: **VPC**.
     *
     * @example VPC
     *
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
        'peerLocation' => 'PeerLocation',
        'portNum' => 'PortNum',
        'regionId' => 'RegionId',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return apList
     */
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
