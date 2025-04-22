<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pds\V20220301\Models\PermissionCondition\ipEquals;
use AlibabaCloud\SDK\Pds\V20220301\Models\PermissionCondition\ipNotEquals;
use AlibabaCloud\SDK\Pds\V20220301\Models\PermissionCondition\stringLike;
use AlibabaCloud\SDK\Pds\V20220301\Models\PermissionCondition\stringNotLike;

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
        'ipEquals' => 'ip_equals',
        'ipNotEquals' => 'ip_not_equals',
        'stringLike' => 'string_like',
        'stringNotLike' => 'string_not_like',
    ];

    public function validate()
    {
        if (null !== $this->ipEquals) {
            $this->ipEquals->validate();
        }
        if (null !== $this->ipNotEquals) {
            $this->ipNotEquals->validate();
        }
        if (null !== $this->stringLike) {
            $this->stringLike->validate();
        }
        if (null !== $this->stringNotLike) {
            $this->stringNotLike->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipEquals) {
            $res['ip_equals'] = null !== $this->ipEquals ? $this->ipEquals->toArray($noStream) : $this->ipEquals;
        }

        if (null !== $this->ipNotEquals) {
            $res['ip_not_equals'] = null !== $this->ipNotEquals ? $this->ipNotEquals->toArray($noStream) : $this->ipNotEquals;
        }

        if (null !== $this->stringLike) {
            $res['string_like'] = null !== $this->stringLike ? $this->stringLike->toArray($noStream) : $this->stringLike;
        }

        if (null !== $this->stringNotLike) {
            $res['string_not_like'] = null !== $this->stringNotLike ? $this->stringNotLike->toArray($noStream) : $this->stringNotLike;
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
