<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\CreateGADInstanceRequest\unitNode;
use AlibabaCloud\Tea\Model;

class CreateGADInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $centralRegionId;

    /**
     * @var string
     */
    public $centralDBInstanceId;

    /**
     * @var string
     */
    public $DBList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var unitNode[]
     */
    public $unitNode;

    /**
     * @var string
     */
    public $centralRdsDtsAdminAccount;

    /**
     * @var string
     */
    public $centralRdsDtsAdminPassword;
    protected $_name = [
        'centralRegionId'            => 'CentralRegionId',
        'centralDBInstanceId'        => 'CentralDBInstanceId',
        'DBList'                     => 'DBList',
        'description'                => 'Description',
        'unitNode'                   => 'UnitNode',
        'centralRdsDtsAdminAccount'  => 'CentralRdsDtsAdminAccount',
        'centralRdsDtsAdminPassword' => 'CentralRdsDtsAdminPassword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->centralRegionId) {
            $res['CentralRegionId'] = $this->centralRegionId;
        }
        if (null !== $this->centralDBInstanceId) {
            $res['CentralDBInstanceId'] = $this->centralDBInstanceId;
        }
        if (null !== $this->DBList) {
            $res['DBList'] = $this->DBList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->unitNode) {
            $res['UnitNode'] = [];
            if (null !== $this->unitNode && \is_array($this->unitNode)) {
                $n = 0;
                foreach ($this->unitNode as $item) {
                    $res['UnitNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->centralRdsDtsAdminAccount) {
            $res['CentralRdsDtsAdminAccount'] = $this->centralRdsDtsAdminAccount;
        }
        if (null !== $this->centralRdsDtsAdminPassword) {
            $res['CentralRdsDtsAdminPassword'] = $this->centralRdsDtsAdminPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGADInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CentralRegionId'])) {
            $model->centralRegionId = $map['CentralRegionId'];
        }
        if (isset($map['CentralDBInstanceId'])) {
            $model->centralDBInstanceId = $map['CentralDBInstanceId'];
        }
        if (isset($map['DBList'])) {
            $model->DBList = $map['DBList'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['UnitNode'])) {
            if (!empty($map['UnitNode'])) {
                $model->unitNode = [];
                $n               = 0;
                foreach ($map['UnitNode'] as $item) {
                    $model->unitNode[$n++] = null !== $item ? unitNode::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CentralRdsDtsAdminAccount'])) {
            $model->centralRdsDtsAdminAccount = $map['CentralRdsDtsAdminAccount'];
        }
        if (isset($map['CentralRdsDtsAdminPassword'])) {
            $model->centralRdsDtsAdminPassword = $map['CentralRdsDtsAdminPassword'];
        }

        return $model;
    }
}
