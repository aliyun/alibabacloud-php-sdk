<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class resourceSpecStatistic extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $ipNumSpec;

    /**
     * @example 10
     *
     * @var int
     */
    public $ipNumUsed;
    protected $_name = [
        'ipNumSpec' => 'IpNumSpec',
        'ipNumUsed' => 'IpNumUsed',
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

        return $model;
    }
}
