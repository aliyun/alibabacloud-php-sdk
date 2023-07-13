<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceDynamicGroupResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example product_key = "a1***" and name LIKE "test%"
     *
     * @var string
     */
    public $dynamicGroupExpression;

    /**
     * @example test
     *
     * @var string
     */
    public $groupDesc;

    /**
     * @example HtMLECKbdJQL***
     *
     * @var string
     */
    public $groupId;

    /**
     * @example grouptest
     *
     * @var string
     */
    public $groupName;

    /**
     * @example 2021-10-17T11:19:31.000Z
     *
     * @var string
     */
    public $utcCreate;
    protected $_name = [
        'dynamicGroupExpression' => 'DynamicGroupExpression',
        'groupDesc'              => 'GroupDesc',
        'groupId'                => 'GroupId',
        'groupName'              => 'GroupName',
        'utcCreate'              => 'UtcCreate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicGroupExpression) {
            $res['DynamicGroupExpression'] = $this->dynamicGroupExpression;
        }
        if (null !== $this->groupDesc) {
            $res['GroupDesc'] = $this->groupDesc;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicGroupExpression'])) {
            $model->dynamicGroupExpression = $map['DynamicGroupExpression'];
        }
        if (isset($map['GroupDesc'])) {
            $model->groupDesc = $map['GroupDesc'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }

        return $model;
    }
}
