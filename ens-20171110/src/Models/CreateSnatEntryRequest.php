<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateSnatEntryRequest extends Model
{
    /**
     * @example nat-5tawjw5j7sgd2deujxuk0****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @example test0
     *
     * @var string
     */
    public $snatEntryName;

    /**
     * @example 120.XXX.XXX.71
     *
     * @var string
     */
    public $snatIp;

    /**
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $sourceCIDR;

    /**
     * @example n-2zeuphj08tt7q3brd****
     *
     * @var string
     */
    public $sourceNetworkId;

    /**
     * @example vsw-bp1hwx7gi495q260p****
     *
     * @var string
     */
    public $sourceVSwitchId;

    /**
     * @var string
     */
    public $standbySnatIp;
    protected $_name = [
        'natGatewayId'    => 'NatGatewayId',
        'snatEntryName'   => 'SnatEntryName',
        'snatIp'          => 'SnatIp',
        'sourceCIDR'      => 'SourceCIDR',
        'sourceNetworkId' => 'SourceNetworkId',
        'sourceVSwitchId' => 'SourceVSwitchId',
        'standbySnatIp'   => 'StandbySnatIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->snatEntryName) {
            $res['SnatEntryName'] = $this->snatEntryName;
        }
        if (null !== $this->snatIp) {
            $res['SnatIp'] = $this->snatIp;
        }
        if (null !== $this->sourceCIDR) {
            $res['SourceCIDR'] = $this->sourceCIDR;
        }
        if (null !== $this->sourceNetworkId) {
            $res['SourceNetworkId'] = $this->sourceNetworkId;
        }
        if (null !== $this->sourceVSwitchId) {
            $res['SourceVSwitchId'] = $this->sourceVSwitchId;
        }
        if (null !== $this->standbySnatIp) {
            $res['StandbySnatIp'] = $this->standbySnatIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSnatEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['SnatEntryName'])) {
            $model->snatEntryName = $map['SnatEntryName'];
        }
        if (isset($map['SnatIp'])) {
            $model->snatIp = $map['SnatIp'];
        }
        if (isset($map['SourceCIDR'])) {
            $model->sourceCIDR = $map['SourceCIDR'];
        }
        if (isset($map['SourceNetworkId'])) {
            $model->sourceNetworkId = $map['SourceNetworkId'];
        }
        if (isset($map['SourceVSwitchId'])) {
            $model->sourceVSwitchId = $map['SourceVSwitchId'];
        }
        if (isset($map['StandbySnatIp'])) {
            $model->standbySnatIp = $map['StandbySnatIp'];
        }

        return $model;
    }
}
