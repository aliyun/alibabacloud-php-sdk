<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\ipLists;

use AlibabaCloud\Tea\Model;

class ipList extends Model
{
    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var bool
     */
    public $snatEntryEnabled;
    protected $_name = [
        'ipAddress'        => 'IpAddress',
        'snatEntryEnabled' => 'SnatEntryEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->snatEntryEnabled) {
            $res['SnatEntryEnabled'] = $this->snatEntryEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['SnatEntryEnabled'])) {
            $model->snatEntryEnabled = $map['SnatEntryEnabled'];
        }

        return $model;
    }
}
