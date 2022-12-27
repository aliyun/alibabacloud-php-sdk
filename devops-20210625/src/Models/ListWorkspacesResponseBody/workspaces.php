<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkspacesResponseBody;

use AlibabaCloud\Tea\Model;

class workspaces extends Model
{
    /**
     * @example https://codeup.aliyun.com/demo/group/Codeup-Demo.git
     *
     * @var string
     */
    public $codeUrl;

    /**
     * @example master
     *
     * @var string
     */
    public $codeVersion;

    /**
     * @example 1628564442000
     *
     * @var string
     */
    public $createTime;

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
     * @example 2::4::60
     *
     * @var string
     */
    public $spec;

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

    /**
     * @example 1470227819xxxxxx
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'codeUrl'     => 'codeUrl',
        'codeVersion' => 'codeVersion',
        'createTime'  => 'createTime',
        'id'          => 'id',
        'name'        => 'name',
        'spec'        => 'spec',
        'status'      => 'status',
        'template'    => 'template',
        'userId'      => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeUrl) {
            $res['codeUrl'] = $this->codeUrl;
        }
        if (null !== $this->codeVersion) {
            $res['codeVersion'] = $this->codeVersion;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->template) {
            $res['template'] = $this->template;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workspaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['codeUrl'])) {
            $model->codeUrl = $map['codeUrl'];
        }
        if (isset($map['codeVersion'])) {
            $model->codeVersion = $map['codeVersion'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['template'])) {
            $model->template = $map['template'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
