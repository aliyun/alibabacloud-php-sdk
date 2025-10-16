<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class CreateAckClusterConnectorRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $connectorName;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var string
     */
    public $primaryVswitchId;

    /**
     * @var string
     */
    public $primaryVswitchIp;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $standbyVswitchId;

    /**
     * @var string
     */
    public $standbyVswitchIp;

    /**
     * @var string
     */
    public $ttl;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'connectorName' => 'ConnectorName',
        'memberUid' => 'MemberUid',
        'primaryVswitchId' => 'PrimaryVswitchId',
        'primaryVswitchIp' => 'PrimaryVswitchIp',
        'regionNo' => 'RegionNo',
        'standbyVswitchId' => 'StandbyVswitchId',
        'standbyVswitchIp' => 'StandbyVswitchIp',
        'ttl' => 'Ttl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->connectorName) {
            $res['ConnectorName'] = $this->connectorName;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->primaryVswitchId) {
            $res['PrimaryVswitchId'] = $this->primaryVswitchId;
        }

        if (null !== $this->primaryVswitchIp) {
            $res['PrimaryVswitchIp'] = $this->primaryVswitchIp;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->standbyVswitchId) {
            $res['StandbyVswitchId'] = $this->standbyVswitchId;
        }

        if (null !== $this->standbyVswitchIp) {
            $res['StandbyVswitchIp'] = $this->standbyVswitchIp;
        }

        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ConnectorName'])) {
            $model->connectorName = $map['ConnectorName'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['PrimaryVswitchId'])) {
            $model->primaryVswitchId = $map['PrimaryVswitchId'];
        }

        if (isset($map['PrimaryVswitchIp'])) {
            $model->primaryVswitchIp = $map['PrimaryVswitchIp'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['StandbyVswitchId'])) {
            $model->standbyVswitchId = $map['StandbyVswitchId'];
        }

        if (isset($map['StandbyVswitchIp'])) {
            $model->standbyVswitchIp = $map['StandbyVswitchIp'];
        }

        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
