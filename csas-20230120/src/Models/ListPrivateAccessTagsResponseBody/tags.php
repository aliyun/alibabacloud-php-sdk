<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessTagsResponseBody;

use AlibabaCloud\Dara\Model;

class tags extends Model
{
    /**
     * @var string[]
     */
    public $applicationIds;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string[]
     */
    public $policyIds;
    /**
     * @var string
     */
    public $tagId;
    /**
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
        if (\is_array($this->applicationIds)) {
            Model::validateArray($this->applicationIds);
        }
        if (\is_array($this->policyIds)) {
            Model::validateArray($this->policyIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationIds) {
            if (\is_array($this->applicationIds)) {
                $res['ApplicationIds'] = [];
                $n1                    = 0;
                foreach ($this->applicationIds as $item1) {
                    $res['ApplicationIds'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->policyIds)) {
                $res['PolicyIds'] = [];
                $n1               = 0;
                foreach ($this->policyIds as $item1) {
                    $res['PolicyIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }

        if (null !== $this->tagType) {
            $res['TagType'] = $this->tagType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationIds'])) {
            if (!empty($map['ApplicationIds'])) {
                $model->applicationIds = [];
                $n1                    = 0;
                foreach ($map['ApplicationIds'] as $item1) {
                    $model->applicationIds[$n1++] = $item1;
                }
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
                $model->policyIds = [];
                $n1               = 0;
                foreach ($map['PolicyIds'] as $item1) {
                    $model->policyIds[$n1++] = $item1;
                }
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
