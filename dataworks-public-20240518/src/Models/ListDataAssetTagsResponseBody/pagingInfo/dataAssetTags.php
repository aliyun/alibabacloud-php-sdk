<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataAssetTagsResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;

class dataAssetTags extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string[]
     */
    public $managers;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $modifyUser;

    /**
     * @var string
     */
    public $valueType;

    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'category' => 'Category',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'description' => 'Description',
        'key' => 'Key',
        'managers' => 'Managers',
        'modifyTime' => 'ModifyTime',
        'modifyUser' => 'ModifyUser',
        'valueType' => 'ValueType',
        'values' => 'Values',
    ];

    public function validate()
    {
        if (\is_array($this->managers)) {
            Model::validateArray($this->managers);
        }
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->managers) {
            if (\is_array($this->managers)) {
                $res['Managers'] = [];
                $n1 = 0;
                foreach ($this->managers as $item1) {
                    $res['Managers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }

        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    $res['Values'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Managers'])) {
            if (!empty($map['Managers'])) {
                $model->managers = [];
                $n1 = 0;
                foreach ($map['Managers'] as $item1) {
                    $model->managers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
        }

        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['Values'] as $item1) {
                    $model->values[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
