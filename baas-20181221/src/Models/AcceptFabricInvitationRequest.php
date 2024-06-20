<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class AcceptFabricInvitationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example secrettoken
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
     * @return AcceptFabricInvitationRequest
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
