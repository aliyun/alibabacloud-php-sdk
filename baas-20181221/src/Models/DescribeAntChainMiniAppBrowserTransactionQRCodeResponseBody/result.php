<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserTransactionQRCodeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $base64QRCodePNG;

    /**
     * @var string
     */
    public $transactionHash;

    /**
     * @var string
     */
    public $QRCodeContent;

    /**
     * @var string
     */
    public $antChainId;
    protected $_name = [
        'base64QRCodePNG' => 'Base64QRCodePNG',
        'transactionHash' => 'TransactionHash',
        'QRCodeContent'   => 'QRCodeContent',
        'antChainId'      => 'AntChainId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->base64QRCodePNG) {
            $res['Base64QRCodePNG'] = $this->base64QRCodePNG;
        }
        if (null !== $this->transactionHash) {
            $res['TransactionHash'] = $this->transactionHash;
        }
        if (null !== $this->QRCodeContent) {
            $res['QRCodeContent'] = $this->QRCodeContent;
        }
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
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
        if (isset($map['Base64QRCodePNG'])) {
            $model->base64QRCodePNG = $map['Base64QRCodePNG'];
        }
        if (isset($map['TransactionHash'])) {
            $model->transactionHash = $map['TransactionHash'];
        }
        if (isset($map['QRCodeContent'])) {
            $model->QRCodeContent = $map['QRCodeContent'];
        }
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }

        return $model;
    }
}
