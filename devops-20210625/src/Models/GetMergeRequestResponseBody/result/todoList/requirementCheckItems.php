<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestResponseBody\result\todoList;

use AlibabaCloud\Tea\Model;

class requirementCheckItems extends Model
{
    /**
     * @example COMMENTS_CHECK
     *
     * @var string
     */
    public $itemType;

    /**
     * @example true
     *
     * @var bool
     */
    public $pass;
    protected $_name = [
        'itemType' => 'itemType',
        'pass'     => 'pass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemType) {
            $res['itemType'] = $this->itemType;
        }
        if (null !== $this->pass) {
            $res['pass'] = $this->pass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requirementCheckItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['itemType'])) {
            $model->itemType = $map['itemType'];
        }
        if (isset($map['pass'])) {
            $model->pass = $map['pass'];
        }

        return $model;
    }
}
