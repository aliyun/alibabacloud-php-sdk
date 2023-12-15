<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeEthereumDeletableResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $deletable;

    /**
     * @var string
     */
    public $ethereumId;
    protected $_name = [
        'deletable'  => 'Deletable',
        'ethereumId' => 'EthereumId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletable) {
            $res['Deletable'] = $this->deletable;
        }
        if (null !== $this->ethereumId) {
            $res['EthereumId'] = $this->ethereumId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Deletable'])) {
            $model->deletable = $map['Deletable'];
        }
        if (isset($map['EthereumId'])) {
            $model->ethereumId = $map['EthereumId'];
        }

        return $model;
    }
}
