<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeAntChainQRCodeAuthorizationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example bDXK6boZ
     *
     * @var string
     */
    public $antChainId;

    /**
     * @description This parameter is required.
     *
     * @example MINI_APP_BROWSER_TRANSACTION
     *
     * @var string
     */
    public $QRCodeType;
    protected $_name = [
        'antChainId' => 'AntChainId',
        'QRCodeType' => 'QRCodeType',
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
        if (null !== $this->QRCodeType) {
            $res['QRCodeType'] = $this->QRCodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAntChainQRCodeAuthorizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['QRCodeType'])) {
            $model->QRCodeType = $map['QRCodeType'];
        }

        return $model;
    }
}
