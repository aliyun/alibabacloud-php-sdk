<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdIpv6InfoResponse;

use AlibabaCloud\Tea\Model;

class supportIpv6Info extends Model
{
    /**
     * @var bool
     */
    public $supportIpv6;

    /**
     * @var string
     */
    public $ensRegionId;
    protected $_name = [
        'supportIpv6' => 'SupportIpv6',
        'ensRegionId' => 'EnsRegionId',
    ];

    public function validate()
    {
        Model::validateRequired('supportIpv6', $this->supportIpv6, true);
        Model::validateRequired('ensRegionId', $this->ensRegionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportIpv6) {
            $res['SupportIpv6'] = $this->supportIpv6;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
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
        if (isset($map['SupportIpv6'])) {
            $model->supportIpv6 = $map['SupportIpv6'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        return $model;
    }
}
