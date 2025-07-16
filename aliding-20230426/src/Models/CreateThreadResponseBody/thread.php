<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateThreadResponseBody;

use AlibabaCloud\Tea\Model;

class thread extends Model
{
    /**
     * @var int
     */
    public $createAt;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'createAt' => 'createAt',
        'id' => 'id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createAt) {
            $res['createAt'] = $this->createAt;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return thread
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createAt'])) {
            $model->createAt = $map['createAt'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        return $model;
    }
}
