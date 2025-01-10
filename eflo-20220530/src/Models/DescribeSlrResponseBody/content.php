<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\DescribeSlrResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description Whether the role exists
     *
     * @example true
     *
     * @var bool
     */
    public $hasRole;
    protected $_name = [
        'hasRole' => 'HasRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasRole) {
            $res['HasRole'] = $this->hasRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasRole'])) {
            $model->hasRole = $map['HasRole'];
        }

        return $model;
    }
}
