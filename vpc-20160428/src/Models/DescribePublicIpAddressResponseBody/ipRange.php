<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePublicIpAddressResponseBody;

use AlibabaCloud\Tea\Model;

class ipRange extends Model
{
    /**
     * @var string[]
     */
    public $ipRange;
    protected $_name = [
        'ipRange' => 'IpRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipRange) {
            $res['IpRange'] = $this->ipRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpRange'])) {
            if (!empty($map['IpRange'])) {
                $model->ipRange = $map['IpRange'];
            }
        }

        return $model;
    }
}
