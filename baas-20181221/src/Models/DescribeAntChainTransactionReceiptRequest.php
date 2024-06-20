<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeAntChainTransactionReceiptRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example pYogqb9v
     *
     * @var string
     */
    public $antChainId;

    /**
     * @description This parameter is required.
     *
     * @example b3b0d2db83d3e670449d1e2a39d1d13b7e0e6080b0f9c6945f79eca68d1dd2ca
     *
     * @var string
     */
    public $hash;
    protected $_name = [
        'antChainId' => 'AntChainId',
        'hash'       => 'Hash',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->hash) {
            $res['Hash'] = $this->hash;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAntChainTransactionReceiptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['Hash'])) {
            $model->hash = $map['Hash'];
        }

        return $model;
    }
}
