<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponseBody\groups;

use AlibabaCloud\Tea\Model;

class group extends Model
{
    /**
     * @description The time when the policy was attached to the RAM user group.
     *
     * @example 2015-02-18T17:22:08Z
     *
     * @var string
     */
    public $attachDate;

    /**
     * @description The description of the RAM user group.
     *
     * @example Test team
     *
     * @var string
     */
    public $comments;

    /**
     * @description The name of the RAM user group.
     *
     * @example QA-Team
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'attachDate' => 'AttachDate',
        'comments'   => 'Comments',
        'groupName'  => 'GroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachDate) {
            $res['AttachDate'] = $this->attachDate;
        }
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
     * @return group
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachDate'])) {
            $model->attachDate = $map['AttachDate'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
