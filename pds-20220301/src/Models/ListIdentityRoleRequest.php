<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ListIdentityRoleRequest extends Model
{
    /**
     * @var Identity
     */
    public $identity;
    protected $_name = [
        'identity' => 'identity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identity) {
            $res['identity'] = null !== $this->identity ? $this->identity->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIdentityRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['identity'])) {
            $model->identity = Identity::fromMap($map['identity']);
        }

        return $model;
    }
}
