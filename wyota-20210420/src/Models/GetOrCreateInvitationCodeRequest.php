<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class GetOrCreateInvitationCodeRequest extends Model
{
    /**
     * @var int
     */
    public $expireDays;

    /**
     * @var int
     */
    public $expireMinutes;

    /**
     * @var string
     */
    public $terminalGroupId;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'expireDays' => 'ExpireDays',
        'expireMinutes' => 'ExpireMinutes',
        'terminalGroupId' => 'TerminalGroupId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireDays) {
            $res['ExpireDays'] = $this->expireDays;
        }

        if (null !== $this->expireMinutes) {
            $res['ExpireMinutes'] = $this->expireMinutes;
        }

        if (null !== $this->terminalGroupId) {
            $res['TerminalGroupId'] = $this->terminalGroupId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ExpireDays'])) {
            $model->expireDays = $map['ExpireDays'];
        }

        if (isset($map['ExpireMinutes'])) {
            $model->expireMinutes = $map['ExpireMinutes'];
        }

        if (isset($map['TerminalGroupId'])) {
            $model->terminalGroupId = $map['TerminalGroupId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
