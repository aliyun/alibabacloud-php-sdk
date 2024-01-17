<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListBuildConfigsResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListBuildConfigsResponseBody\data\keywords;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $buildIn;

    /**
     * @example 2023-04-11 06:14:07
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $createUser;

    /**
     * @var int
     */
    public $id;

    /**
     * @var keywords[]
     */
    public $keywords;

    /**
     * @example writingStyle
     *
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $tagDescription;

    /**
     * @example media
     *
     * @var string
     */
    public $type;

    /**
     * @example 2023-04-11 06:14:07
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $updateUser;
    protected $_name = [
        'buildIn'        => 'BuildIn',
        'createTime'     => 'CreateTime',
        'createUser'     => 'CreateUser',
        'id'             => 'Id',
        'keywords'       => 'Keywords',
        'tag'            => 'Tag',
        'tagDescription' => 'TagDescription',
        'type'           => 'Type',
        'updateTime'     => 'UpdateTime',
        'updateUser'     => 'UpdateUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildIn) {
            $res['BuildIn'] = $this->buildIn;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->keywords) {
            $res['Keywords'] = [];
            if (null !== $this->keywords && \is_array($this->keywords)) {
                $n = 0;
                foreach ($this->keywords as $item) {
                    $res['Keywords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->tagDescription) {
            $res['TagDescription'] = $this->tagDescription;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateUser) {
            $res['UpdateUser'] = $this->updateUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildIn'])) {
            $model->buildIn = $map['BuildIn'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Keywords'])) {
            if (!empty($map['Keywords'])) {
                $model->keywords = [];
                $n               = 0;
                foreach ($map['Keywords'] as $item) {
                    $model->keywords[$n++] = null !== $item ? keywords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TagDescription'])) {
            $model->tagDescription = $map['TagDescription'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateUser'])) {
            $model->updateUser = $map['UpdateUser'];
        }

        return $model;
    }
}
