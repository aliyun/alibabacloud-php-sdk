<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateStandardGroupRequest extends Model
{
    /**
     * @description The type of the database engine. For more information about the valid values of this parameter, see [DbType parameter](https://help.aliyun.com/document_detail/198106.html).
     *
     * This parameter is required.
     * @example mysql
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The description of the security rule set.
     *
     * This parameter is required.
     * @example test_rule
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the security rule set.
     *
     * This parameter is required.
     * @example test_group
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the tenant.
     *
     * @example 3000
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dbType'      => 'DbType',
        'description' => 'Description',
        'groupName'   => 'GroupName',
        'tid'         => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStandardGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
