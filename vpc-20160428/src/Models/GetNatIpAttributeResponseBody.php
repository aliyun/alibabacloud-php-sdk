<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class GetNatIpAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $natIp;

    /**
     * @var string
     */
    public $natIpCidr;

    /**
     * @var string
     */
    public $natIpDescription;

    /**
     * @var string
     */
    public $natIpId;

    /**
     * @var string
     */
    public $natIpName;

    /**
     * @var string
     */
    public $natIpStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'natGatewayId' => 'NatGatewayId',
        'natIp' => 'NatIp',
        'natIpCidr' => 'NatIpCidr',
        'natIpDescription' => 'NatIpDescription',
        'natIpId' => 'NatIpId',
        'natIpName' => 'NatIpName',
        'natIpStatus' => 'NatIpStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->natIp) {
            $res['NatIp'] = $this->natIp;
        }

        if (null !== $this->natIpCidr) {
            $res['NatIpCidr'] = $this->natIpCidr;
        }

        if (null !== $this->natIpDescription) {
            $res['NatIpDescription'] = $this->natIpDescription;
        }

        if (null !== $this->natIpId) {
            $res['NatIpId'] = $this->natIpId;
        }

        if (null !== $this->natIpName) {
            $res['NatIpName'] = $this->natIpName;
        }

        if (null !== $this->natIpStatus) {
            $res['NatIpStatus'] = $this->natIpStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NatIp'])) {
            $model->natIp = $map['NatIp'];
        }

        if (isset($map['NatIpCidr'])) {
            $model->natIpCidr = $map['NatIpCidr'];
        }

        if (isset($map['NatIpDescription'])) {
            $model->natIpDescription = $map['NatIpDescription'];
        }

        if (isset($map['NatIpId'])) {
            $model->natIpId = $map['NatIpId'];
        }

        if (isset($map['NatIpName'])) {
            $model->natIpName = $map['NatIpName'];
        }

        if (isset($map['NatIpStatus'])) {
            $model->natIpStatus = $map['NatIpStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
