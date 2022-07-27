<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListServiceConnectionsResponseBody;

use AlibabaCloud\Tea\Model;

class serviceConnections extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerAccountId;

    /**
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
