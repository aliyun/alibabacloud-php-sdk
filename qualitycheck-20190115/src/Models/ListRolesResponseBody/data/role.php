<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListRolesResponseBody\data;

use AlibabaCloud\Tea\Model;

class role extends Model
{
    /**
     * @example 2019-06-20T17:33Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @example 3
     *
     * @var int
     */
    public $id;

    /**
     * @example 99
     *
     * @var int
     */
    public $level;

    /**
     * @example AGENT
     *
     * @var string
     */
    public $name;

    /**
     * @example 2019-06-20T17:33Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'displayName' => 'DisplayName',
        'id'          => 'Id',
        'level'       => 'Level',
        'name'        => 'Name',
        'updateTime'  => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return role
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
