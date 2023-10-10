<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricChannelMembersResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1544411108000
     *
     * @var string
     */
    public $acceptTime;

    /**
     * @example chan-channelx-1l1hmckuuisxo
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 1544411108000
     *
     * @var string
     */
    public $inviteTime;

    /**
     * @example description
     *
     * @var string
     */
    public $organizationDescription;

    /**
     * @example hello
     *
     * @var string
     */
    public $organizationDomain;

    /**
     * @example peers-aaaaaa1-1oxw31d046jtl
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example name
     *
     * @var string
     */
    public $organizationName;

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
        'acceptTime'              => 'AcceptTime',
        'channelId'               => 'ChannelId',
        'inviteTime'              => 'InviteTime',
        'organizationDescription' => 'OrganizationDescription',
        'organizationDomain'      => 'OrganizationDomain',
        'organizationId'          => 'OrganizationId',
        'organizationName'        => 'OrganizationName',
        'state'                   => 'State',
        'withPeer'                => 'WithPeer',
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
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->inviteTime) {
            $res['InviteTime'] = $this->inviteTime;
        }
        if (null !== $this->organizationDescription) {
            $res['OrganizationDescription'] = $this->organizationDescription;
        }
        if (null !== $this->organizationDomain) {
            $res['OrganizationDomain'] = $this->organizationDomain;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->organizationName) {
            $res['OrganizationName'] = $this->organizationName;
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
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['InviteTime'])) {
            $model->inviteTime = $map['InviteTime'];
        }
        if (isset($map['OrganizationDescription'])) {
            $model->organizationDescription = $map['OrganizationDescription'];
        }
        if (isset($map['OrganizationDomain'])) {
            $model->organizationDomain = $map['OrganizationDomain'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['OrganizationName'])) {
            $model->organizationName = $map['OrganizationName'];
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
