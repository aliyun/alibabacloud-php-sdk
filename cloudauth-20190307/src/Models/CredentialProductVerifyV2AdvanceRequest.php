<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class CredentialProductVerifyV2AdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $credName;

    /**
     * @var string
     */
    public $credType;

    /**
     * @var Stream
     */
    public $imageFileObject;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $merchantId;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'credName' => 'CredName',
        'credType' => 'CredType',
        'imageFileObject' => 'ImageFile',
        'imageUrl' => 'ImageUrl',
        'merchantId' => 'MerchantId',
        'productCode' => 'ProductCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credName) {
            $res['CredName'] = $this->credName;
        }

        if (null !== $this->credType) {
            $res['CredType'] = $this->credType;
        }

        if (null !== $this->imageFileObject) {
            $res['ImageFile'] = $this->imageFileObject;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->merchantId) {
            $res['MerchantId'] = $this->merchantId;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredName'])) {
            $model->credName = $map['CredName'];
        }

        if (isset($map['CredType'])) {
            $model->credType = $map['CredType'];
        }

        if (isset($map['ImageFile'])) {
            $model->imageFileObject = $map['ImageFile'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['MerchantId'])) {
            $model->merchantId = $map['MerchantId'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
