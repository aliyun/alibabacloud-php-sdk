<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineGroupResponseBody;

use AlibabaCloud\Tea\Model;

class pipelineGroup extends Model
{
    /**
     * @example 1586863220000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 111
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'createTime' => 'createTime',
        'id'         => 'id',
        'name'       => 'name',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pipelineGroup
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

        return $model;
    }
}
