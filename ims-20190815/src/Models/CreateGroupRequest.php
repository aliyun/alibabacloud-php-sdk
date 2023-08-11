<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupRequest extends Model
{
    /**
     * @description The description.
     *
     * The value can be up to 128 characters in length.
     * @example Dev-Team
     *
     * @var string
     */
    public $comments;

    /**
     * @description The display name of the RAM user group.
     *
     * The name can be up to 24 characters in length.
     * @example Dev-Team
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The name of the RAM user group. You must specify this parameter.
     *
     * The name can be up to 64 characters in length and can contain letters, digits, periods (.), underscores (\_), and hyphens (-).
     * @example Dev-Team
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'comments'    => 'Comments',
        'displayName' => 'DisplayName',
        'groupName'   => 'GroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
