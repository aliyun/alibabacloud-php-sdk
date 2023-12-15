<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumMemberApprovalResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example Any
     *
     * @var string
     */
    public $channelCreatePolicy;

    /**
     * @example 1544411108000
     *
     * @var string
     */
    public $confirmTime;

    /**
     * @example consortium-lianmenyumingyi-hc5d1bwlulg7
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
     * @example domain
     *
     * @var string
     */
    public $domainName;

    /**
     * @example peers-aaaaaa2-1eqnj5o5w9dt3
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example orgname
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
    protected $_name = [
        'channelCreatePolicy' => 'ChannelCreatePolicy',
        'confirmTime'         => 'ConfirmTime',
        'consortiumId'        => 'ConsortiumId',
        'consortiumName'      => 'ConsortiumName',
        'domainName'          => 'DomainName',
        'organizationId'      => 'OrganizationId',
        'organizationName'    => 'OrganizationName',
        'state'               => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelCreatePolicy) {
            $res['ChannelCreatePolicy'] = $this->channelCreatePolicy;
        }
        if (null !== $this->confirmTime) {
            $res['ConfirmTime'] = $this->confirmTime;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->consortiumName) {
            $res['ConsortiumName'] = $this->consortiumName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (isset($map['ChannelCreatePolicy'])) {
            $model->channelCreatePolicy = $map['ChannelCreatePolicy'];
        }
        if (isset($map['ConfirmTime'])) {
            $model->confirmTime = $map['ConfirmTime'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['ConsortiumName'])) {
            $model->consortiumName = $map['ConsortiumName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
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

        return $model;
    }
}
