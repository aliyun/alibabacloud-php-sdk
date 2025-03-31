<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class DescribeAccountPrivilegeObjectsRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $columnPrivilegeObject;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $databasePrivilegeObject;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $privilegeType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $tablePrivilegeObject;
    protected $_name = [
        'accountName' => 'AccountName',
        'columnPrivilegeObject' => 'ColumnPrivilegeObject',
        'DBClusterId' => 'DBClusterId',
        'databasePrivilegeObject' => 'DatabasePrivilegeObject',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'privilegeType' => 'PrivilegeType',
        'regionId' => 'RegionId',
        'tablePrivilegeObject' => 'TablePrivilegeObject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->columnPrivilegeObject) {
            $res['ColumnPrivilegeObject'] = $this->columnPrivilegeObject;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->databasePrivilegeObject) {
            $res['DatabasePrivilegeObject'] = $this->databasePrivilegeObject;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->privilegeType) {
            $res['PrivilegeType'] = $this->privilegeType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->tablePrivilegeObject) {
            $res['TablePrivilegeObject'] = $this->tablePrivilegeObject;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['ColumnPrivilegeObject'])) {
            $model->columnPrivilegeObject = $map['ColumnPrivilegeObject'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DatabasePrivilegeObject'])) {
            $model->databasePrivilegeObject = $map['DatabasePrivilegeObject'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PrivilegeType'])) {
            $model->privilegeType = $map['PrivilegeType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TablePrivilegeObject'])) {
            $model->tablePrivilegeObject = $map['TablePrivilegeObject'];
        }

        return $model;
    }
}
