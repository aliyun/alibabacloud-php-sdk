<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeContactPointsResponseBody\contactPoints\contactPoint;

use AlibabaCloud\Tea\Model;

class publicAddresses extends Model
{
    /**
     * @var string[]
     */
    public $publicAddress;
    protected $_name = [
        'publicAddress' => 'PublicAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publicAddress) {
            $res['PublicAddress'] = $this->publicAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicAddresses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PublicAddress'])) {
            if (!empty($map['PublicAddress'])) {
                $model->publicAddress = $map['PublicAddress'];
            }
        }

        return $model;
    }
}
