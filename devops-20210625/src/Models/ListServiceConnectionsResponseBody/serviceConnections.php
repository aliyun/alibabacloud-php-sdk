<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListServiceConnectionsResponseBody;

use AlibabaCloud\Tea\Model;

class serviceConnections extends Model
{
    /**
     * @description 创建时间
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 服务连接Id
     *
     * @var int
     */
    public $id;

    /**
     * @description 服务连接名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 拥有者阿里云账号id
     *
     * @var int
     */
    public $ownerAccountId;

    /**
     * @description 服务连接类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'createTime'     => 'createTime',
        'id'             => 'id',
        'name'           => 'name',
        'ownerAccountId' => 'ownerAccountId',
        'type'           => 'type',
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
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->ownerAccountId) {
            $res['ownerAccountId'] = $this->ownerAccountId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceConnections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['ownerAccountId'])) {
            $model->ownerAccountId = $map['ownerAccountId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
