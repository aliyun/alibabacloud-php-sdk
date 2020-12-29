<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\JoinFabricChannelResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $withPeer;

    /**
     * @var string
     */
    public $acceptTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $destroyTime;

    /**
     * @var string
     */
    public $inviteTime;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $confirmTime;

    /**
     * @var string
     */
    public $approveTime;

    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'withPeer'       => 'WithPeer',
        'acceptTime'     => 'AcceptTime',
        'state'          => 'State',
        'destroyTime'    => 'DestroyTime',
        'inviteTime'     => 'InviteTime',
        'channelId'      => 'ChannelId',
        'confirmTime'    => 'ConfirmTime',
        'approveTime'    => 'ApproveTime',
        'organizationId' => 'OrganizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->withPeer) {
            $res['WithPeer'] = $this->withPeer;
        }
        if (null !== $this->acceptTime) {
            $res['AcceptTime'] = $this->acceptTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->destroyTime) {
            $res['DestroyTime'] = $this->destroyTime;
        }
        if (null !== $this->inviteTime) {
            $res['InviteTime'] = $this->inviteTime;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->confirmTime) {
            $res['ConfirmTime'] = $this->confirmTime;
        }
        if (null !== $this->approveTime) {
            $res['ApproveTime'] = $this->approveTime;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
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
        if (isset($map['WithPeer'])) {
            $model->withPeer = $map['WithPeer'];
        }
        if (isset($map['AcceptTime'])) {
            $model->acceptTime = $map['AcceptTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['DestroyTime'])) {
            $model->destroyTime = $map['DestroyTime'];
        }
        if (isset($map['InviteTime'])) {
            $model->inviteTime = $map['InviteTime'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ConfirmTime'])) {
            $model->confirmTime = $map['ConfirmTime'];
        }
        if (isset($map['ApproveTime'])) {
            $model->approveTime = $map['ApproveTime'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        return $model;
    }
}
