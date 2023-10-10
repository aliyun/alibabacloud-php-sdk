<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeEthereumDeletableRequest extends Model
{
    /**
     * @example eth-1ilrhcav4ibdl
     *
     * @var string
     */
    public $ethereumId;
    protected $_name = [
        'ethereumId' => 'EthereumId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ethereumId) {
            $res['EthereumId'] = $this->ethereumId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEthereumDeletableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EthereumId'])) {
            $model->ethereumId = $map['EthereumId'];
        }

        return $model;
    }
}
