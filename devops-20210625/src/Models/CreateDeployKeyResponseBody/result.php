<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateDeployKeyResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $fingerprint;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'createdAt' => 'createdAt',
        'fingerprint' => 'fingerprint',
        'id' => 'id',
        'key' => 'key',
        'title' => 'title',
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

        if (null !== $this->fingerprint) {
            $res['fingerprint'] = $this->fingerprint;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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

        if (isset($map['fingerprint'])) {
            $model->fingerprint = $map['fingerprint'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
