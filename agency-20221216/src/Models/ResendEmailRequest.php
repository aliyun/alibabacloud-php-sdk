<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class ResendEmailRequest extends Model
{
    /**
     * @example 176
     *
     * @var int
     */
    public $inviteId;
    protected $_name = [
        'inviteId' => 'InviteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inviteId) {
            $res['InviteId'] = $this->inviteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResendEmailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InviteId'])) {
            $model->inviteId = $map['InviteId'];
        }

        return $model;
    }
}
