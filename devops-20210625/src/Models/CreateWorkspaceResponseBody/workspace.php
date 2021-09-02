<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkspaceResponseBody;

use AlibabaCloud\Tea\Model;

class workspace extends Model
{
    /**
     * @description 工作空间唯一标识，字符串形式，可在云效DevStudio访问空间链接中获取
     *
     * @var string
     */
    public $id;

    /**
     * @description 工作空间名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 空间状态，枚举：CREATING-创建中, SUCCESS-运行中, FROZEN-冻结中, RECOVERING-恢复中
     *
     * @var string
     */
    public $status;

    /**
     * @description 工作空间模板
     *
     * @var string
     */
    public $template;

    /**
     * @description 创建者，阿里云PK
     *
     * @var string
     */
    public $creator;

    /**
     * @description 创建时间戳
     *
     * @var string
     */
    public $createTime;
    protected $_name = [
        'id'         => 'id',
        'name'       => 'name',
        'status'     => 'status',
        'template'   => 'template',
        'creator'    => 'creator',
        'createTime' => 'createTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
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
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        return $model;
    }
}
