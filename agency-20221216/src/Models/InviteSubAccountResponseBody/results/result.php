<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\InviteSubAccountResponseBody\results;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 15
     *
     * @var int
     */
    public $days;

    /**
     * @example 12345
     *
     * @var int
     */
    public $inviteId;

    /**
     * @example http://agency-intl.console.aliyun.com/customer/register?intl=true&fxinfo=-4uT%2FMWHnnUdvr5GXVd1AYK8luTnGgH3M7Y3lSCd5M1fxRwAkViTWtDJDpckh0HL
     *
     * @var string
     */
    public $regUrl;
    protected $_name = [
        'days'     => 'Days',
        'inviteId' => 'InviteId',
        'regUrl'   => 'RegUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }
        if (null !== $this->inviteId) {
            $res['InviteId'] = $this->inviteId;
        }
        if (null !== $this->regUrl) {
            $res['RegUrl'] = $this->regUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Days'])) {
            $model->days = $map['Days'];
        }
        if (isset($map['InviteId'])) {
            $model->inviteId = $map['InviteId'];
        }
        if (isset($map['RegUrl'])) {
            $model->regUrl = $map['RegUrl'];
        }

        return $model;
    }
}
