<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMiniAppBrowserTransactionQRCodeNewResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $antChainId;

    /**
     * @var string
     */
    public $base64QRCodePNG;

    /**
     * @var string
     */
    public $QRCodeContent;

    /**
     * @var string
     */
    public $transactionHash;
    protected $_name = [
        'antChainId'      => 'AntChainId',
        'base64QRCodePNG' => 'Base64QRCodePNG',
        'QRCodeContent'   => 'QRCodeContent',
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
        if (null !== $this->base64QRCodePNG) {
            $res['Base64QRCodePNG'] = $this->base64QRCodePNG;
        }
        if (null !== $this->QRCodeContent) {
            $res['QRCodeContent'] = $this->QRCodeContent;
        }
        if (null !== $this->transactionHash) {
            $res['TransactionHash'] = $this->transactionHash;
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
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['Base64QRCodePNG'])) {
            $model->base64QRCodePNG = $map['Base64QRCodePNG'];
        }
        if (isset($map['QRCodeContent'])) {
            $model->QRCodeContent = $map['QRCodeContent'];
        }
        if (isset($map['TransactionHash'])) {
            $model->transactionHash = $map['TransactionHash'];
        }

        return $model;
    }
}
