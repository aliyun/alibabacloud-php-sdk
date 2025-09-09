<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstancesResponseBody\instances\instance\vips;

use AlibabaCloud\Dara\Model;

class vip extends Model
{
    /**
     * @var string
     */
    public $IP;

    /**
     * @var string
     */
    public $port;

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
    protected $_name = [
        'IP' => 'IP',
        'port' => 'Port',
        'type' => 'Type',
        'vpcId' => 'VpcId',
        'vswitchId' => 'VswitchId',
        'dns' => 'dns',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->dns) {
            $res['dns'] = $this->dns;
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

        if (isset($map['dns'])) {
            $model->dns = $map['dns'];
        }

        return $model;
    }
}
