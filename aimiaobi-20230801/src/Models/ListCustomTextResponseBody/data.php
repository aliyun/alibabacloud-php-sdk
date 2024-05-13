<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListCustomTextResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 内容
     *
     * @var string
     */
    public $content;

    /**
     * @example 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 创建用户
     *
     * @var string
     */
    public $createUser;

    /**
     * @example 40
     *
     * @var int
     */
    public $id;

    /**
     * @example 标题
     *
     * @var string
     */
    public $title;

    /**
     * @example 修改时间
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 修改用户
     *
     * @var string
     */
    public $updateUser;
    protected $_name = [
        'content'    => 'Content',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'id'         => 'Id',
        'title'      => 'Title',
        'updateTime' => 'UpdateTime',
        'updateUser' => 'UpdateUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
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
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
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
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
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
