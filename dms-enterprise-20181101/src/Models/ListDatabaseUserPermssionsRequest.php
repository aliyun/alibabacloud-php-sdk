<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListDatabaseUserPermssionsRequest extends Model
{
    /**
     * @var string
     */
    public $dbId;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $permType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $tid;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'dbId'       => 'DbId',
        'logic'      => 'Logic',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'permType'   => 'PermType',
        'regionId'   => 'RegionId',
        'tid'        => 'Tid',
        'userName'   => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->permType) {
            $res['PermType'] = $this->permType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDatabaseUserPermssionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PermType'])) {
            $model->permType = $map['PermType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
