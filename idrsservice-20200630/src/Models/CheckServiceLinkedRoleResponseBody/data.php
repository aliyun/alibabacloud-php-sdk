<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\CheckServiceLinkedRoleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
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
     * @return data
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
