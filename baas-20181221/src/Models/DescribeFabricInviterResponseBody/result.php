<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricInviterResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $inviterId;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var string
     */
    public $inviterName;

    /**
     * @var string
     */
    public $consortiumName;
    protected $_name = [
        'inviterId'      => 'InviterId',
        'expireTime'     => 'ExpireTime',
        'consortiumId'   => 'ConsortiumId',
        'inviterName'    => 'InviterName',
        'consortiumName' => 'ConsortiumName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inviterId) {
            $res['InviterId'] = $this->inviterId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->inviterName) {
            $res['InviterName'] = $this->inviterName;
        }
        if (null !== $this->consortiumName) {
            $res['ConsortiumName'] = $this->consortiumName;
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
        if (isset($map['InviterId'])) {
            $model->inviterId = $map['InviterId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['InviterName'])) {
            $model->inviterName = $map['InviterName'];
        }
        if (isset($map['ConsortiumName'])) {
            $model->consortiumName = $map['ConsortiumName'];
        }

        return $model;
    }
}
