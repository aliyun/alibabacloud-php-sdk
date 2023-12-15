<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class AcceptInvitationRequest extends Model
{
    /**
     * @example bank
     *
     * @var string
     */
    public $code;

    /**
     * @example true
     *
     * @var bool
     */
    public $isAccepted;
    protected $_name = [
        'code'       => 'Code',
        'isAccepted' => 'IsAccepted',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->isAccepted) {
            $res['IsAccepted'] = $this->isAccepted;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AcceptInvitationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsAccepted'])) {
            $model->isAccepted = $map['IsAccepted'];
        }

        return $model;
    }
}
