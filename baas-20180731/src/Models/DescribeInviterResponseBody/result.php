<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeInviterResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example consortium-lianmenyumingyi-hc5d1bwl****
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @example name
     *
     * @var string
     */
    public $consortiumName;

    /**
     * @example 1544411108000
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example 3524234
     *
     * @var int
     */
    public $inviterId;

    /**
     * @example name
     *
     * @var string
     */
    public $inviterName;
    protected $_name = [
        'consortiumId'   => 'ConsortiumId',
        'consortiumName' => 'ConsortiumName',
        'expireTime'     => 'ExpireTime',
        'inviterId'      => 'InviterId',
        'inviterName'    => 'InviterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->consortiumName) {
            $res['ConsortiumName'] = $this->consortiumName;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->inviterId) {
            $res['InviterId'] = $this->inviterId;
        }
        if (null !== $this->inviterName) {
            $res['InviterName'] = $this->inviterName;
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
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['ConsortiumName'])) {
            $model->consortiumName = $map['ConsortiumName'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InviterId'])) {
            $model->inviterId = $map['InviterId'];
        }
        if (isset($map['InviterName'])) {
            $model->inviterName = $map['InviterName'];
        }

        return $model;
    }
}
