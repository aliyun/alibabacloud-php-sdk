<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessTagsResponseBody;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var string[]
     */
    public $applicationIds;

    /**
     * @example 2022-10-10 11:39:34
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
     * @var string[]
     */
    public $policyIds;

    /**
     * @example tag-d3f64e8bdd4a****
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
        'applicationIds' => 'ApplicationIds',
        'createTime'     => 'CreateTime',
        'description'    => 'Description',
        'name'           => 'Name',
        'policyIds'      => 'PolicyIds',
        'tagId'          => 'TagId',
        'tagType'        => 'TagType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationIds) {
            $res['ApplicationIds'] = $this->applicationIds;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policyIds) {
            $res['PolicyIds'] = $this->policyIds;
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
        if (isset($map['ApplicationIds'])) {
            if (!empty($map['ApplicationIds'])) {
                $model->applicationIds = $map['ApplicationIds'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PolicyIds'])) {
            if (!empty($map['PolicyIds'])) {
                $model->policyIds = $map['PolicyIds'];
            }
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
