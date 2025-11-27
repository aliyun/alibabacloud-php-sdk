<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\CreateGadInstanceMemberRequest\unitNode;

class CreateGadInstanceMemberRequest extends Model
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
    public $gadInstanceId;

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
        'gadInstanceId' => 'GadInstanceId',
        'unitNode' => 'UnitNode',
    ];

    public function validate()
    {
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

        if (null !== $this->gadInstanceId) {
            $res['GadInstanceId'] = $this->gadInstanceId;
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

        if (isset($map['GadInstanceId'])) {
            $model->gadInstanceId = $map['GadInstanceId'];
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
