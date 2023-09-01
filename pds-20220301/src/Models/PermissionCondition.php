<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\PermissionCondition\ipEquals;
use AlibabaCloud\SDK\Pds\V20220301\Models\PermissionCondition\ipNotEquals;
use AlibabaCloud\SDK\Pds\V20220301\Models\PermissionCondition\stringLike;
use AlibabaCloud\SDK\Pds\V20220301\Models\PermissionCondition\stringNotLike;
use AlibabaCloud\Tea\Model;

class PermissionCondition extends Model
{
    /**
     * @var ipEquals
     */
    public $ipEquals;

    /**
     * @var ipNotEquals
     */
    public $ipNotEquals;

    /**
     * @var stringLike
     */
    public $stringLike;

    /**
     * @var stringNotLike
     */
    public $stringNotLike;
    protected $_name = [
        'ipEquals'      => 'ip_equals',
        'ipNotEquals'   => 'ip_not_equals',
        'stringLike'    => 'string_like',
        'stringNotLike' => 'string_not_like',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipEquals) {
            $res['ip_equals'] = null !== $this->ipEquals ? $this->ipEquals->toMap() : null;
        }
        if (null !== $this->ipNotEquals) {
            $res['ip_not_equals'] = null !== $this->ipNotEquals ? $this->ipNotEquals->toMap() : null;
        }
        if (null !== $this->stringLike) {
            $res['string_like'] = null !== $this->stringLike ? $this->stringLike->toMap() : null;
        }
        if (null !== $this->stringNotLike) {
            $res['string_not_like'] = null !== $this->stringNotLike ? $this->stringNotLike->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PermissionCondition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ip_equals'])) {
            $model->ipEquals = ipEquals::fromMap($map['ip_equals']);
        }
        if (isset($map['ip_not_equals'])) {
            $model->ipNotEquals = ipNotEquals::fromMap($map['ip_not_equals']);
        }
        if (isset($map['string_like'])) {
            $model->stringLike = stringLike::fromMap($map['string_like']);
        }
        if (isset($map['string_not_like'])) {
            $model->stringNotLike = stringNotLike::fromMap($map['string_not_like']);
        }

        return $model;
    }
}
