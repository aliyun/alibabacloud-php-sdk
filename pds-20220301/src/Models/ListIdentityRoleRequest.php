<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

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
        if (null !== $this->identity) {
            $this->identity->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identity) {
            $res['identity'] = null !== $this->identity ? $this->identity->toArray($noStream) : $this->identity;
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
        if (isset($map['identity'])) {
            $model->identity = Identity::fromMap($map['identity']);
        }

        return $model;
    }
}
