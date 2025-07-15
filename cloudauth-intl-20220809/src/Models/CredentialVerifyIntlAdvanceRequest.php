<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class CredentialVerifyIntlAdvanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 0101
     *
     * @var string
     */
    public $credName;

    /**
     * @description This parameter is required.
     *
     * @example 01
     *
     * @var string
     */
    public $credType;

    /**
     * @var Stream
     */
    public $imageFileObject;

    /**
     * @example https://oss-bj01.avic.com/eavic-prod-commodity/pic/commodity/94677ee6-1067-4287-8ff4-6e030ef3a5a8.jpg
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $productCode;
    protected $_name = [
        'credName' => 'CredName',
        'credType' => 'CredType',
        'imageFileObject' => 'ImageFile',
        'imageUrl' => 'ImageUrl',
        'productCode' => 'ProductCode',
    ];

    public function validate() {}

    public function toMap()
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
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CredentialVerifyIntlAdvanceRequest
     */
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
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
