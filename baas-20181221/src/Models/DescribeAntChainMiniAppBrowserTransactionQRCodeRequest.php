<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeAntChainMiniAppBrowserTransactionQRCodeRequest extends Model
{
    /**
     * @example bDXK6boZ
     *
     * @var string
     */
    public $antChainId;

    /**
     * @example 4a1f1371012cf840a9e4c6bde430d5ba600e422e592d153bd2689783cd1f87d0
     *
     * @var string
     */
    public $transactionHash;
    protected $_name = [
        'antChainId'      => 'AntChainId',
        'transactionHash' => 'TransactionHash',
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
        if (null !== $this->transactionHash) {
            $res['TransactionHash'] = $this->transactionHash;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAntChainMiniAppBrowserTransactionQRCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['TransactionHash'])) {
            $model->transactionHash = $map['TransactionHash'];
        }

        return $model;
    }
}
