<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\CreateGadInstanceMemberRequest\unitNode;
use AlibabaCloud\Tea\Model;

class CreateGadInstanceMemberRequest extends Model
{
    /**
     * @description The ID of the central node . You can call the DescribeGadInstances operation to query the ID.
     *
     * @example gad-rm-bp1npi2j8****
     *
     * @var string
     */
    public $centralDBInstanceId;

    /**
     * @description The username of the privileged account of the central node. You can call the DescribeAccounts operation to query the privileged account of the central node.
     *
     * @example test
     *
     * @var string
     */
    public $centralRdsDtsAdminAccount;

    /**
     * @description The password of the privileged account of the central node.
     *
     * @example Test12345
     *
     * @var string
     */
    public $centralRdsDtsAdminPassword;

    /**
     * @description The region ID of the central node. You can call the DescribeRegions operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $centralRegionId;

    /**
     * @description A JSON array that consists of the information about the databases on the central node. All database information that you specify in this array is synchronized to the unit nodes of the global active database cluster. The JSON array contains the following fields:
     *
     *   **name**: the name of the database.
     *   **all**: specifies whether to synchronize all data in the database or the table. Valid values: **true** and **false**.
     *   **Table**: the name of the table. If you set the **all** field to **false**, you must nest the name of the table that you want to synchronize into the JSON array.
     *
     * >  For more information, see [Objects of DTS tasks](~~209545~~).
     * @example {    "testdb": {     "name": "testdb",     "all": false,     "Table": {       "order": {         "name": "order",         "all": true       },       "ordernew": {         "name": "ordernew",         "all": true       }     }   } }
     *
     * @var string
     */
    public $DBList;

    /**
     * @description The ID of the global active database cluster. You can call the DescribeGadInstances operation to query the ID.
     *
     * @example gad-rm-bp1npi2j8****
     *
     * @var string
     */
    public $gadInstanceId;

    /**
     * @description The information about the unit node.
     *
     * @var unitNode[]
     */
    public $unitNode;
    protected $_name = [
        'centralDBInstanceId'        => 'CentralDBInstanceId',
        'centralRdsDtsAdminAccount'  => 'CentralRdsDtsAdminAccount',
        'centralRdsDtsAdminPassword' => 'CentralRdsDtsAdminPassword',
        'centralRegionId'            => 'CentralRegionId',
        'DBList'                     => 'DBList',
        'gadInstanceId'              => 'GadInstanceId',
        'unitNode'                   => 'UnitNode',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['UnitNode'] = [];
            if (null !== $this->unitNode && \is_array($this->unitNode)) {
                $n = 0;
                foreach ($this->unitNode as $item) {
                    $res['UnitNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
                $n               = 0;
                foreach ($map['UnitNode'] as $item) {
                    $model->unitNode[$n++] = null !== $item ? unitNode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
