<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceResponseBody\securityPreference;

use AlibabaCloud\Tea\Model;

class personalInfoPreference extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $allowUserToManagePersonalDingTalk;
    protected $_name = [
        'allowUserToManagePersonalDingTalk' => 'AllowUserToManagePersonalDingTalk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowUserToManagePersonalDingTalk) {
            $res['AllowUserToManagePersonalDingTalk'] = $this->allowUserToManagePersonalDingTalk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return personalInfoPreference
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowUserToManagePersonalDingTalk'])) {
            $model->allowUserToManagePersonalDingTalk = $map['AllowUserToManagePersonalDingTalk'];
        }

        return $model;
    }
}
