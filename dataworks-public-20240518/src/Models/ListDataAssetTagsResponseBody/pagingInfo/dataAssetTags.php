<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataAssetTagsResponseBody\pagingInfo;

use AlibabaCloud\Tea\Model;

class dataAssetTags extends Model
{
    /**
     * @example Normal
     *
     * @var string
     */
    public $category;

    /**
     * @example 1735890003000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 12345
     *
     * @var string
     */
    public $createUser;

    /**
     * @var string
     */
    public $description;

    /**
     * @example key1
     *
     * @var string
     */
    public $key;

    /**
     * @var string[]
     */
    public $managers;

    /**
     * @example 1735890003000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example 1234
     *
     * @var string
     */
    public $modifyUser;

    /**
     * @example String
     *
     * @var string
     */
    public $valueType;

    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'category'    => 'Category',
        'createTime'  => 'CreateTime',
        'createUser'  => 'CreateUser',
        'description' => 'Description',
        'key'         => 'Key',
        'managers'    => 'Managers',
        'modifyTime'  => 'ModifyTime',
        'modifyUser'  => 'ModifyUser',
        'valueType'   => 'ValueType',
        'values'      => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Managers'] = $this->managers;
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
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataAssetTags
     */
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
                $model->managers = $map['Managers'];
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
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
