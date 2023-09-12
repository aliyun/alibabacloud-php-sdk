<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserResponseBody;

use AlibabaCloud\Tea\Model;

class groups extends Model
{
    /**
     * @description 组描述。
     *
     * @example description_demo
     *
     * @var string
     */
    public $description;

    /**
     * @description 组ID。
     *
     * @example group_ufdsasn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $groupId;

    /**
     * @description 组名称。
     *
     * @example name_test
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'description' => 'description',
        'groupId'     => 'groupId',
        'groupName'   => 'groupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }
        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }

        return $model;
    }
}
