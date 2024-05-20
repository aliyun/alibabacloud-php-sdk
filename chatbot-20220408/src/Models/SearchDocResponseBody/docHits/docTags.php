<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\SearchDocResponseBody\docHits;

use AlibabaCloud\Tea\Model;

class docTags extends Model
{
    /**
     * @var bool
     */
    public $defaultTag;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $tagId;

    /**
     * @var string
     */
    public $tagName;
    protected $_name = [
        'defaultTag' => 'DefaultTag',
        'groupId'    => 'GroupId',
        'groupName'  => 'GroupName',
        'tagId'      => 'TagId',
        'tagName'    => 'TagName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultTag) {
            $res['DefaultTag'] = $this->defaultTag;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return docTags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultTag'])) {
            $model->defaultTag = $map['DefaultTag'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        return $model;
    }
}
