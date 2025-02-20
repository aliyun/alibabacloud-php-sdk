<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectMembersResponseBody\members;

use AlibabaCloud\Dara\Model;

class organizationUserInfo extends Model
{
    /**
     * @var string
     */
    public $organizationIdentifier;
    protected $_name = [
        'organizationIdentifier' => 'organizationIdentifier',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->organizationIdentifier) {
            $res['organizationIdentifier'] = $this->organizationIdentifier;
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
        if (isset($map['organizationIdentifier'])) {
            $model->organizationIdentifier = $map['organizationIdentifier'];
        }

        return $model;
    }
}
