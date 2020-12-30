<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceResponseBody\data\vips;

use AlibabaCloud\Tea\Model;

class vip extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $dns;

    /**
     * @var string
     */
    public $port;

    /**
     * @var int
     */
    public $expireDays;
    protected $_name = [
        'type'       => 'Type',
        'vpcId'      => 'VpcId',
        'vswitchId'  => 'VswitchId',
        'dns'        => 'Dns',
        'port'       => 'Port',
        'expireDays' => 'ExpireDays',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->dns) {
            $res['Dns'] = $this->dns;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->expireDays) {
            $res['ExpireDays'] = $this->expireDays;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['Dns'])) {
            $model->dns = $map['Dns'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ExpireDays'])) {
            $model->expireDays = $map['ExpireDays'];
        }

        return $model;
    }
}
