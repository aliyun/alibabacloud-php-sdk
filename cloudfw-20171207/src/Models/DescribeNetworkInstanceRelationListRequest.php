<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeNetworkInstanceRelationListRequest extends Model
{
    /**
     * @var string
     */
    public $connectType;

    /**
     * @var string
     */
    public $firewallConfigureStatus;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $networkInstanceId;

    /**
     * @var string
     */
    public $peerNetworkInstanceId;
    protected $_name = [
        'connectType' => 'ConnectType',
        'firewallConfigureStatus' => 'FirewallConfigureStatus',
        'lang' => 'Lang',
        'networkInstanceId' => 'NetworkInstanceId',
        'peerNetworkInstanceId' => 'PeerNetworkInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectType) {
            $res['ConnectType'] = $this->connectType;
        }

        if (null !== $this->firewallConfigureStatus) {
            $res['FirewallConfigureStatus'] = $this->firewallConfigureStatus;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->networkInstanceId) {
            $res['NetworkInstanceId'] = $this->networkInstanceId;
        }

        if (null !== $this->peerNetworkInstanceId) {
            $res['PeerNetworkInstanceId'] = $this->peerNetworkInstanceId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectType'])) {
            $model->connectType = $map['ConnectType'];
        }

        if (isset($map['FirewallConfigureStatus'])) {
            $model->firewallConfigureStatus = $map['FirewallConfigureStatus'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['NetworkInstanceId'])) {
            $model->networkInstanceId = $map['NetworkInstanceId'];
        }

        if (isset($map['PeerNetworkInstanceId'])) {
            $model->peerNetworkInstanceId = $map['PeerNetworkInstanceId'];
        }

        return $model;
    }
}
