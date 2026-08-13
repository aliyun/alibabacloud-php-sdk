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

    /**
     * @var string
     */
    public $eniZoneId;
    protected $_name = [
        'eniId' => 'EniId',
        'eniPrivateIpAddress' => 'EniPrivateIpAddress',
        'eniVSwitchId' => 'EniVSwitchId',
        'eniZoneId' => 'EniZoneId',
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

        if (null !== $this->eniZoneId) {
            $res['EniZoneId'] = $this->eniZoneId;
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

        if (isset($map['EniZoneId'])) {
            $model->eniZoneId = $map['EniZoneId'];
        }

        return $model;
    }
}
