<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateDeployKeyResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 2022-03-18 14:24:54
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example xx:xx:xx:xx
     *
     * @var string
     */
    public $fingerprint;

    /**
     * @example 502385
     *
     * @var int
     */
    public $id;

    /**
     * @example ""
     *
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'createdAt'   => 'createdAt',
        'fingerprint' => 'fingerprint',
        'id'          => 'id',
        'key'         => 'key',
        'title'       => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return result
     */
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
