<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class GetNatIpCidrAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $natIpCidr;

    /**
     * @var string
     */
    public $natIpCidrDescription;

    /**
     * @var string
     */
    public $natIpCidrId;

    /**
     * @var string
     */
    public $natIpCidrName;

    /**
     * @var string
     */
    public $natIpCidrStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'natGatewayId' => 'NatGatewayId',
        'natIpCidr' => 'NatIpCidr',
        'natIpCidrDescription' => 'NatIpCidrDescription',
        'natIpCidrId' => 'NatIpCidrId',
        'natIpCidrName' => 'NatIpCidrName',
        'natIpCidrStatus' => 'NatIpCidrStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->natIpCidr) {
            $res['NatIpCidr'] = $this->natIpCidr;
        }

        if (null !== $this->natIpCidrDescription) {
            $res['NatIpCidrDescription'] = $this->natIpCidrDescription;
        }

        if (null !== $this->natIpCidrId) {
            $res['NatIpCidrId'] = $this->natIpCidrId;
        }

        if (null !== $this->natIpCidrName) {
            $res['NatIpCidrName'] = $this->natIpCidrName;
        }

        if (null !== $this->natIpCidrStatus) {
            $res['NatIpCidrStatus'] = $this->natIpCidrStatus;
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
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NatIpCidr'])) {
            $model->natIpCidr = $map['NatIpCidr'];
        }

        if (isset($map['NatIpCidrDescription'])) {
            $model->natIpCidrDescription = $map['NatIpCidrDescription'];
        }

        if (isset($map['NatIpCidrId'])) {
            $model->natIpCidrId = $map['NatIpCidrId'];
        }

        if (isset($map['NatIpCidrName'])) {
            $model->natIpCidrName = $map['NatIpCidrName'];
        }

        if (isset($map['NatIpCidrStatus'])) {
            $model->natIpCidrStatus = $map['NatIpCidrStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
