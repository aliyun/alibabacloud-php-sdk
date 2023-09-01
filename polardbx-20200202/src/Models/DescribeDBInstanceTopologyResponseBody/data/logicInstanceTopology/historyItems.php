<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyResponseBody\data\logicInstanceTopology;

use AlibabaCloud\Tea\Model;

class historyItems extends Model
{
    /**
     * @var bool
     */
    public $activated;

    /**
     * @var string
     */
    public $azone;

    /**
     * @var string
     */
    public $characterType;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $phyInstanceName;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'activated'       => 'Activated',
        'azone'           => 'Azone',
        'characterType'   => 'CharacterType',
        'DBInstanceId'    => 'DBInstanceId',
        'DBInstanceName'  => 'DBInstanceName',
        'phyInstanceName' => 'PhyInstanceName',
        'region'          => 'Region',
        'role'            => 'Role',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activated) {
            $res['Activated'] = $this->activated;
        }
        if (null !== $this->azone) {
            $res['Azone'] = $this->azone;
        }
        if (null !== $this->characterType) {
            $res['CharacterType'] = $this->characterType;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->phyInstanceName) {
            $res['PhyInstanceName'] = $this->phyInstanceName;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return historyItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Activated'])) {
            $model->activated = $map['Activated'];
        }
        if (isset($map['Azone'])) {
            $model->azone = $map['Azone'];
        }
        if (isset($map['CharacterType'])) {
            $model->characterType = $map['CharacterType'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['PhyInstanceName'])) {
            $model->phyInstanceName = $map['PhyInstanceName'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
