<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\JoinFabricChannelResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1533025590
     *
     * @var string
     */
    public $acceptTime;

    /**
     * @example 1533025590
     *
     * @var string
     */
    public $approveTime;

    /**
     * @example channelid
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 1533025590
     *
     * @var string
     */
    public $confirmTime;

    /**
     * @example 1533025590
     *
     * @var string
     */
    public $destroyTime;

    /**
     * @example 1533025590
     *
     * @var string
     */
    public $inviteTime;

    /**
     * @example peers-aaaaaa2-1eqnj5o5w9dt3
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example Running
     *
     * @var string
     */
    public $state;

    /**
     * @example true
     *
     * @var bool
     */
    public $withPeer;
    protected $_name = [
        'acceptTime'     => 'AcceptTime',
        'approveTime'    => 'ApproveTime',
        'channelId'      => 'ChannelId',
        'confirmTime'    => 'ConfirmTime',
        'destroyTime'    => 'DestroyTime',
        'inviteTime'     => 'InviteTime',
        'organizationId' => 'OrganizationId',
        'state'          => 'State',
        'withPeer'       => 'WithPeer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptTime) {
            $res['AcceptTime'] = $this->acceptTime;
        }
        if (null !== $this->approveTime) {
            $res['ApproveTime'] = $this->approveTime;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->confirmTime) {
            $res['ConfirmTime'] = $this->confirmTime;
        }
        if (null !== $this->destroyTime) {
            $res['DestroyTime'] = $this->destroyTime;
        }
        if (null !== $this->inviteTime) {
            $res['InviteTime'] = $this->inviteTime;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->withPeer) {
            $res['WithPeer'] = $this->withPeer;
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
        if (isset($map['AcceptTime'])) {
            $model->acceptTime = $map['AcceptTime'];
        }
        if (isset($map['ApproveTime'])) {
            $model->approveTime = $map['ApproveTime'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ConfirmTime'])) {
            $model->confirmTime = $map['ConfirmTime'];
        }
        if (isset($map['DestroyTime'])) {
            $model->destroyTime = $map['DestroyTime'];
        }
        if (isset($map['InviteTime'])) {
            $model->inviteTime = $map['InviteTime'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['WithPeer'])) {
            $model->withPeer = $map['WithPeer'];
        }

        return $model;
    }
}
