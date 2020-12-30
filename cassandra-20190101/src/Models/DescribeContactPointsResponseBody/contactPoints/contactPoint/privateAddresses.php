<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeContactPointsResponseBody\contactPoints\contactPoint;

use AlibabaCloud\Tea\Model;

class privateAddresses extends Model
{
    /**
     * @var string[]
     */
    public $privateAddress;
    protected $_name = [
        'privateAddress' => 'PrivateAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privateAddress) {
            $res['PrivateAddress'] = $this->privateAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateAddresses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivateAddress'])) {
            if (!empty($map['PrivateAddress'])) {
                $model->privateAddress = $map['PrivateAddress'];
            }
        }

        return $model;
    }
}
