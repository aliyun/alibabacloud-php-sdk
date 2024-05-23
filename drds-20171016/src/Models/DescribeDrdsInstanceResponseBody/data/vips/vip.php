<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstanceResponseBody\data\vips;

use AlibabaCloud\Tea\Model;

class vip extends Model
{
    /**
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $IP;

    /**
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @example VPC
     *
     * @var string
     */
    public $type;

    /**
     * @example vpc-en23cx****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vsw-ewk3****
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'IP'        => 'IP',
        'port'      => 'Port',
        'type'      => 'Type',
        'vpcId'     => 'VpcId',
        'vswitchId' => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vip
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
