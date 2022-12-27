<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkspaceResponseBody;

use AlibabaCloud\Tea\Model;

class workspace extends Model
{
    /**
     * @example 1628564442000
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1470227819xxxxxx
     *
     * @var string
     */
    public $creator;

    /**
     * @example 6ed82817-ab75-4563-865d-81e60dxxxxxx
     *
     * @var string
     */
    public $id;

    /**
     * @example Demo
     *
     * @var string
     */
    public $name;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example all-in-one
     *
     * @var string
     */
    public $template;
    protected $_name = [
        'createTime' => 'createTime',
        'creator'    => 'creator',
        'id'         => 'id',
        'name'       => 'name',
        'status'     => 'status',
        'template'   => 'template',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->template) {
            $res['template'] = $this->template;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workspace
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['template'])) {
            $model->template = $map['template'];
        }

        return $model;
    }
}
