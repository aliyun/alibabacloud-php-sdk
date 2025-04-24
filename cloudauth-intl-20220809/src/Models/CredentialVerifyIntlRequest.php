<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class CredentialVerifyIntlRequest extends Model
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
     * @var string
     */
    public $imageFile;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'credName' => 'CredName',
        'credType' => 'CredType',
        'imageFile' => 'ImageFile',
        'imageUrl' => 'ImageUrl',
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

        if (null !== $this->imageFile) {
            $res['ImageFile'] = $this->imageFile;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
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
            $model->imageFile = $map['ImageFile'];
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
