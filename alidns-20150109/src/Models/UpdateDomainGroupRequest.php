<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateDomainGroupRequest extends Model
{
    /**
     * @description The ID of the domain name group.
     *
     * @example 2223
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The new name of the domain name group.
     *
     * @example NewName
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The language type.
     *
     * @example en
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'groupId'   => 'GroupId',
        'groupName' => 'GroupName',
        'lang'      => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDomainGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
