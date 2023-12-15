<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeChannelMembersResponseBody;

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
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @example hello
     *
     * @var string
     */
    public $domain;

    /**
     * @example 1544411108000
     *
     * @var string
     */
    public $inviteTime;

    /**
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @example peers-aaaaaa1-1oxw31d046jtl
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
        'channelId'      => 'ChannelId',
        'description'    => 'Description',
        'domain'         => 'Domain',
        'inviteTime'     => 'InviteTime',
        'name'           => 'Name',
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
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->inviteTime) {
            $res['InviteTime'] = $this->inviteTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['InviteTime'])) {
            $model->inviteTime = $map['InviteTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
