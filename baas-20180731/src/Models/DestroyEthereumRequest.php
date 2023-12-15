<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class DestroyEthereumRequest extends Model
{
    /**
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
     * @return DestroyEthereumRequest
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
