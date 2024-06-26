<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\SDK\Baas\V20180731\Models\ApproveEthereumInviteeRequest\invitee;
use AlibabaCloud\Tea\Model;

class ApproveEthereumInviteeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $id;

    /**
     * @description This parameter is required.
     *
     * @var invitee[]
     */
    public $invitee;
    protected $_name = [
        'id'      => 'Id',
        'invitee' => 'Invitee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->invitee) {
            $res['Invitee'] = [];
            if (null !== $this->invitee && \is_array($this->invitee)) {
                $n = 0;
                foreach ($this->invitee as $item) {
                    $res['Invitee'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApproveEthereumInviteeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Invitee'])) {
            if (!empty($map['Invitee'])) {
                $model->invitee = [];
                $n              = 0;
                foreach ($map['Invitee'] as $item) {
                    $model->invitee[$n++] = null !== $item ? invitee::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
