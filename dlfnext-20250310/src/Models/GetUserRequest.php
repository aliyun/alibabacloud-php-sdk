<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class GetUserRequest extends Model
{
    /**
     * @var string
     */
    public $userPrincipal;
    protected $_name = [
        'userPrincipal' => 'userPrincipal',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userPrincipal) {
            $res['userPrincipal'] = $this->userPrincipal;
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
        if (isset($map['userPrincipal'])) {
            $model->userPrincipal = $map['userPrincipal'];
        }

        return $model;
    }
}
