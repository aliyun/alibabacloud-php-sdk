<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceResponseBody\securityPreference;

use AlibabaCloud\Dara\Model;

class personalInfoPreference extends Model
{
    /**
     * @var bool
     */
    public $allowUserToManagePersonalDingTalk;
    protected $_name = [
        'allowUserToManagePersonalDingTalk' => 'AllowUserToManagePersonalDingTalk',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowUserToManagePersonalDingTalk) {
            $res['AllowUserToManagePersonalDingTalk'] = $this->allowUserToManagePersonalDingTalk;
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
        if (isset($map['AllowUserToManagePersonalDingTalk'])) {
            $model->allowUserToManagePersonalDingTalk = $map['AllowUserToManagePersonalDingTalk'];
        }

        return $model;
    }
}
