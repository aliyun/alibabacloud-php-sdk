<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateGADInstanceRequest\tag;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateGADInstanceRequest\unitNode;

class CreateGADInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $centralDBInstanceId;

    /**
     * @var string
     */
    public $centralRdsDtsAdminAccount;

    /**
     * @var string
     */
    public $centralRdsDtsAdminPassword;

    /**
     * @var string
     */
    public $centralRegionId;

    /**
     * @var string
     */
    public $DBList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var unitNode[]
     */
    public $unitNode;
    protected $_name = [
        'centralDBInstanceId' => 'CentralDBInstanceId',
        'centralRdsDtsAdminAccount' => 'CentralRdsDtsAdminAccount',
        'centralRdsDtsAdminPassword' => 'CentralRdsDtsAdminPassword',
        'centralRegionId' => 'CentralRegionId',
        'DBList' => 'DBList',
        'description' => 'Description',
        'resourceGroupId' => 'ResourceGroupId',
        'tag' => 'Tag',
        'unitNode' => 'UnitNode',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (\is_array($this->unitNode)) {
            Model::validateArray($this->unitNode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->centralDBInstanceId) {
            $res['CentralDBInstanceId'] = $this->centralDBInstanceId;
        }

        if (null !== $this->centralRdsDtsAdminAccount) {
            $res['CentralRdsDtsAdminAccount'] = $this->centralRdsDtsAdminAccount;
        }

        if (null !== $this->centralRdsDtsAdminPassword) {
            $res['CentralRdsDtsAdminPassword'] = $this->centralRdsDtsAdminPassword;
        }

        if (null !== $this->centralRegionId) {
            $res['CentralRegionId'] = $this->centralRegionId;
        }

        if (null !== $this->DBList) {
            $res['DBList'] = $this->DBList;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->unitNode) {
            if (\is_array($this->unitNode)) {
                $res['UnitNode'] = [];
                $n1 = 0;
                foreach ($this->unitNode as $item1) {
                    $res['UnitNode'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CentralDBInstanceId'])) {
            $model->centralDBInstanceId = $map['CentralDBInstanceId'];
        }

        if (isset($map['CentralRdsDtsAdminAccount'])) {
            $model->centralRdsDtsAdminAccount = $map['CentralRdsDtsAdminAccount'];
        }

        if (isset($map['CentralRdsDtsAdminPassword'])) {
            $model->centralRdsDtsAdminPassword = $map['CentralRdsDtsAdminPassword'];
        }

        if (isset($map['CentralRegionId'])) {
            $model->centralRegionId = $map['CentralRegionId'];
        }

        if (isset($map['DBList'])) {
            $model->DBList = $map['DBList'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UnitNode'])) {
            if (!empty($map['UnitNode'])) {
                $model->unitNode = [];
                $n1 = 0;
                foreach ($map['UnitNode'] as $item1) {
                    $model->unitNode[$n1] = unitNode::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
