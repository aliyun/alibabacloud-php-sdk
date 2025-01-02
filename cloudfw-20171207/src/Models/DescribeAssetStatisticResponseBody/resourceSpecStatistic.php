<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class resourceSpecStatistic extends Model
{
    /**
     * @description The number of public IP addresses that can be protected.
     *
     * @example 20
     *
     * @var int
     */
    public $ipNumSpec;

    /**
     * @description The number of public IP addresses that are protected.
     *
     * @example 10
     *
     * @var int
     */
    public $ipNumUsed;

    /**
     * @description The number of public IP addresses that can enable data leakage detection.
     *
     * @example 0
     *
     * @var int
     */
    public $sensitiveDataIpNumSpec;

    /**
     * @description The number of public IP addresses that enabled data leakage detection.
     *
     * @example 0
     *
     * @var int
     */
    public $sensitiveDataIpNumUsed;
    protected $_name = [
        'ipNumSpec'              => 'IpNumSpec',
        'ipNumUsed'              => 'IpNumUsed',
        'sensitiveDataIpNumSpec' => 'SensitiveDataIpNumSpec',
        'sensitiveDataIpNumUsed' => 'SensitiveDataIpNumUsed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipNumSpec) {
            $res['IpNumSpec'] = $this->ipNumSpec;
        }
        if (null !== $this->ipNumUsed) {
            $res['IpNumUsed'] = $this->ipNumUsed;
        }
        if (null !== $this->sensitiveDataIpNumSpec) {
            $res['SensitiveDataIpNumSpec'] = $this->sensitiveDataIpNumSpec;
        }
        if (null !== $this->sensitiveDataIpNumUsed) {
            $res['SensitiveDataIpNumUsed'] = $this->sensitiveDataIpNumUsed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceSpecStatistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpNumSpec'])) {
            $model->ipNumSpec = $map['IpNumSpec'];
        }
        if (isset($map['IpNumUsed'])) {
            $model->ipNumUsed = $map['IpNumUsed'];
        }
        if (isset($map['SensitiveDataIpNumSpec'])) {
            $model->sensitiveDataIpNumSpec = $map['SensitiveDataIpNumSpec'];
        }
        if (isset($map['SensitiveDataIpNumUsed'])) {
            $model->sensitiveDataIpNumUsed = $map['SensitiveDataIpNumUsed'];
        }

        return $model;
    }
}
