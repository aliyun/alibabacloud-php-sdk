<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetStatisticResponseBody;

use AlibabaCloud\Dara\Model;

class resourceSpecStatistic extends Model
{
    /**
     * @var int
     */
    public $ipNumSpec;

    /**
     * @var int
     */
    public $ipNumUsed;

    /**
     * @var int
     */
    public $sensitiveDataIpNumSpec;

    /**
     * @var int
     */
    public $sensitiveDataIpNumUsed;
    protected $_name = [
        'ipNumSpec' => 'IpNumSpec',
        'ipNumUsed' => 'IpNumUsed',
        'sensitiveDataIpNumSpec' => 'SensitiveDataIpNumSpec',
        'sensitiveDataIpNumUsed' => 'SensitiveDataIpNumUsed',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
