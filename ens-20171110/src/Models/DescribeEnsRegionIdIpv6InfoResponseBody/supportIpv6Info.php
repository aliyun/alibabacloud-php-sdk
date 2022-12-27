<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdIpv6InfoResponseBody;

use AlibabaCloud\Tea\Model;

class supportIpv6Info extends Model
{
    /**
     * @example cn-chengdu-xxxx-4
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example true
     *
     * @var bool
     */
    public $supportIpv6;
    protected $_name = [
        'ensRegionId' => 'EnsRegionId',
        'supportIpv6' => 'SupportIpv6',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->supportIpv6) {
            $res['SupportIpv6'] = $this->supportIpv6;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportIpv6Info
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['SupportIpv6'])) {
            $model->supportIpv6 = $map['SupportIpv6'];
        }

        return $model;
    }
}
