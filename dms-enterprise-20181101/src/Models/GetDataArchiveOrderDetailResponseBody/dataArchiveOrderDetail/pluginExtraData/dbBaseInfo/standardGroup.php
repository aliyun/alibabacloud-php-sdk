<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData\dbBaseInfo;

use AlibabaCloud\Dara\Model;

class standardGroup extends Model
{
    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $freeOrStable;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $groupMode;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $lastMenderId;
    protected $_name = [
        'dbType' => 'DbType',
        'description' => 'Description',
        'freeOrStable' => 'FreeOrStable',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'groupMode' => 'GroupMode',
        'groupName' => 'GroupName',
        'id' => 'Id',
        'lastMenderId' => 'LastMenderId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->freeOrStable) {
            $res['FreeOrStable'] = $this->freeOrStable;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->groupMode) {
            $res['GroupMode'] = $this->groupMode;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lastMenderId) {
            $res['LastMenderId'] = $this->lastMenderId;
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
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FreeOrStable'])) {
            $model->freeOrStable = $map['FreeOrStable'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['GroupMode'])) {
            $model->groupMode = $map['GroupMode'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LastMenderId'])) {
            $model->lastMenderId = $map['LastMenderId'];
        }

        return $model;
    }
}
