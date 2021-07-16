<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemResponseBody\data;

use AlibabaCloud\Tea\Model;

class timelines extends Model
{
    /**
     * @description 关键节点 码表:PROBLEM_KEY_NODE (逗号分隔)
     *
     * @var string
     */
    public $keyNode;
    protected $_name = [
        'keyNode' => 'keyNode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyNode) {
            $res['keyNode'] = $this->keyNode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timelines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['keyNode'])) {
            $model->keyNode = $map['keyNode'];
        }

        return $model;
    }
}
