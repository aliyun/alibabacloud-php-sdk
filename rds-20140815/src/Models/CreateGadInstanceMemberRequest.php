<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\CreateGadInstanceMemberRequest\unitNode;
use AlibabaCloud\Tea\Model;

class CreateGadInstanceMemberRequest extends Model
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
    public $gadInstanceId;

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

    /**
     * @var string
     */
    public $DBList;
    protected $_name = [
        'centralRegionId'            => 'CentralRegionId',
        'centralDBInstanceId'        => 'CentralDBInstanceId',
        'gadInstanceId'              => 'GadInstanceId',
        'unitNode'                   => 'UnitNode',
        'centralRdsDtsAdminAccount'  => 'CentralRdsDtsAdminAccount',
        'centralRdsDtsAdminPassword' => 'CentralRdsDtsAdminPassword',
        'DBList'                     => 'DBList',
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
        if (null !== $this->gadInstanceId) {
            $res['GadInstanceId'] = $this->gadInstanceId;
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
        if (null !== $this->DBList) {
            $res['DBList'] = $this->DBList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGadInstanceMemberRequest
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
        if (isset($map['GadInstanceId'])) {
            $model->gadInstanceId = $map['GadInstanceId'];
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
        if (isset($map['DBList'])) {
            $model->DBList = $map['DBList'];
        }

        return $model;
    }
}
