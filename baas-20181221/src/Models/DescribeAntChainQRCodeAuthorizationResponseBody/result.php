<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainQRCodeAuthorizationResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $QRCodeType;

    /**
     * @var string
     */
    public $authorizationType;

    /**
     * @var string
     */
    public $antChainId;
    protected $_name = [
        'QRCodeType'        => 'QRCodeType',
        'authorizationType' => 'AuthorizationType',
        'antChainId'        => 'AntChainId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->QRCodeType) {
            $res['QRCodeType'] = $this->QRCodeType;
        }
        if (null !== $this->authorizationType) {
            $res['AuthorizationType'] = $this->authorizationType;
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
        if (isset($map['QRCodeType'])) {
            $model->QRCodeType = $map['QRCodeType'];
        }
        if (isset($map['AuthorizationType'])) {
            $model->authorizationType = $map['AuthorizationType'];
        }
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }

        return $model;
    }
}
