<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserTransactionQRCodeNewResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 8bd720bde18c4b37b0f4a1c7834db163
     *
     * @var string
     */
    public $antChainId;

    /**
     * @example iVBORw0KGgoAAAANSUhEUgAAAPAAAADwCAIAAACxN37FAAAcb0lEQVR42u3dCZAc1XkAYGlPSRZIGIwEtos4tlM4lE05hhBsU
     *
     * @var string
     */
    public $base64QRCodePNG;

    /**
     * @example https://render.antfin.com/p/s/miniapp-web/?type=trans&from=aliyun&bizid=8bd720bde18c4b37b0f4a1c7834db163&hash=ac73c8fa158436513e0b398632d9a082e04cee3eac6f9fb50087a46d801bdfd1&contractId=
     *
     * @var string
     */
    public $QRCodeContent;

    /**
     * @example ac73c8fa158436513e0b398632d9a082e04cee3eac6f9fb50087a46d801bdfd1
     *
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
