<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetAlertDestinationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed
     */
    public $params;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'createdAt',
        'id' => 'id',
        'name' => 'name',
        'params' => 'params',
        'source' => 'source',
        'target' => 'target',
        'uid' => 'uid',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->params) {
            $res['params'] = $this->params;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->target) {
            $res['target'] = $this->target;
        }

        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['params'])) {
            $model->params = $map['params'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['target'])) {
            $model->target = $map['target'];
        }

        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
