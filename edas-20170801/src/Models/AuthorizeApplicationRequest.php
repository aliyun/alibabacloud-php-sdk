<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $targetUserId;

    /**
     * @var string
     */
    public $appIds;
    protected $_name = [
        'targetUserId' => 'TargetUserId',
        'appIds'       => 'AppIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthorizeApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }

        return $model;
    }
}
