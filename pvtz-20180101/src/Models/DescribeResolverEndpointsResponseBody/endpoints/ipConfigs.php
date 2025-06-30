<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverEndpointsResponseBody\endpoints;

use AlibabaCloud\Dara\Model;

class ipConfigs extends Model
{
    /**
     * @var string
     */
    public $azId;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'azId' => 'AzId',
        'cidrBlock' => 'CidrBlock',
        'ip' => 'Ip',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->azId) {
            $res['AzId'] = $this->azId;
        }

        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['AzId'])) {
            $model->azId = $map['AzId'];
        }

        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
