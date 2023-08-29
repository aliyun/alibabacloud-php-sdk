<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models\LifecycleResource;

use AlibabaCloud\Tea\Model;

class database extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $locationUri;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'description' => 'Description',
        'locationUri' => 'LocationUri',
        'name'        => 'Name',
        'updateTime'  => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->locationUri) {
            $res['LocationUri'] = $this->locationUri;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return database
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
        if (isset($map['LocationUri'])) {
            $model->locationUri = $map['LocationUri'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
