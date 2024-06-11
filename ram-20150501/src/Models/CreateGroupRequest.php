<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

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
     * @description The name of the user group.
     *
     * The name must be 1 to 64 characters in length and can contain letters, digits, periods (.), hyphens (-), and underscores (_).
     * @example Dev-Team
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'comments'  => 'Comments',
        'groupName' => 'GroupName',
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
