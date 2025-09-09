<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceResponseBody\data\vips;

use AlibabaCloud\Dara\Model;

class vip extends Model
{
    /**
     * @var string
     */
    public $dns;

    /**
     * @var int
     */
    public $expireDays;

    /**
     * @var string
     */
    public $port;

    /**
     * @var bool
     */
    public $removeWeight;

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
    protected $_name = [
        'dns' => 'Dns',
        'expireDays' => 'ExpireDays',
        'port' => 'Port',
        'removeWeight' => 'RemoveWeight',
        'type' => 'Type',
        'vpcId' => 'VpcId',
        'vswitchId' => 'VswitchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dns) {
            $res['Dns'] = $this->dns;
        }

        if (null !== $this->expireDays) {
            $res['ExpireDays'] = $this->expireDays;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->removeWeight) {
            $res['RemoveWeight'] = $this->removeWeight;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dns'])) {
            $model->dns = $map['Dns'];
        }

        if (isset($map['ExpireDays'])) {
            $model->expireDays = $map['ExpireDays'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['RemoveWeight'])) {
            $model->removeWeight = $map['RemoveWeight'];
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
