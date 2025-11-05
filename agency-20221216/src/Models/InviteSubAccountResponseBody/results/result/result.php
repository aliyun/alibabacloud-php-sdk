<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\InviteSubAccountResponseBody\results\result;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $days;

    /**
     * @var int
     */
    public $inviteId;

    /**
     * @var string
     */
    public $regUrl;
    protected $_name = [
        'days' => 'Days',
        'inviteId' => 'InviteId',
        'regUrl' => 'RegUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
