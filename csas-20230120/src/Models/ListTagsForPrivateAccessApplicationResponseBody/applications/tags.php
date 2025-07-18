<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListTagsForPrivateAccessApplicationResponseBody\applications;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @example 2022-07-01 16:05:26
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example tag_name
     *
     * @var string
     */
    public $name;

    /**
     * @example tag-c0cb77857a99****
     *
     * @var string
     */
    public $tagId;

    /**
     * @example Default
     *
     * @var string
     */
    public $tagType;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'name' => 'Name',
        'tagId' => 'TagId',
        'tagType' => 'TagType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->tagType) {
            $res['TagType'] = $this->tagType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['TagType'])) {
            $model->tagType = $map['TagType'];
        }

        return $model;
    }
}
