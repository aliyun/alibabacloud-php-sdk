<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateTagResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateTagResponseBody\result\commit;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var commit
     */
    public $commit;

    /**
     * @example 0e3b6aa5eab2b086b59fde74766b28d4e5faab0d
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $message;

    /**
     * @example v1.0
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'commit'  => 'commit',
        'id'      => 'id',
        'message' => 'message',
        'name'    => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commit) {
            $res['commit'] = null !== $this->commit ? $this->commit->toMap() : null;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['commit'])) {
            $model->commit = commit::fromMap($map['commit']);
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
