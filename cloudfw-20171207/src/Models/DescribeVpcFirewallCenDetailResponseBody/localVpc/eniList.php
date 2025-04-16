<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenDetailResponseBody\localVpc;

use AlibabaCloud\Dara\Model;

class eniList extends Model
{
    /**
     * @var string
     */
    public $eniId;

    /**
     * @var string
     */
    public $eniPrivateIpAddress;

    /**
     * @var string
     */
    public $eniVSwitchId;
    protected $_name = [
        'eniId' => 'EniId',
        'eniPrivateIpAddress' => 'EniPrivateIpAddress',
        'eniVSwitchId' => 'EniVSwitchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eniId) {
            $res['EniId'] = $this->eniId;
        }

        if (null !== $this->eniPrivateIpAddress) {
            $res['EniPrivateIpAddress'] = $this->eniPrivateIpAddress;
        }

        if (null !== $this->eniVSwitchId) {
            $res['EniVSwitchId'] = $this->eniVSwitchId;
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
        if (isset($map['EniId'])) {
            $model->eniId = $map['EniId'];
        }

        if (isset($map['EniPrivateIpAddress'])) {
            $model->eniPrivateIpAddress = $map['EniPrivateIpAddress'];
        }

        if (isset($map['EniVSwitchId'])) {
            $model->eniVSwitchId = $map['EniVSwitchId'];
        }

        return $model;
    }
}
