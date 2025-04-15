<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class Id2MetaPeriodVerifyIntlRequest extends Model
{
    /**
     * @var string
     */
    public $docName;

    /**
     * @var string
     */
    public $docNo;

    /**
     * @var string
     */
    public $docType;

    /**
     * @var string
     */
    public $merchantBizId;

    /**
     * @var string
     */
    public $merchantUserId;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $sceneCode;

    /**
     * @var string
     */
    public $validityEndDate;

    /**
     * @var string
     */
    public $validityStartDate;
    protected $_name = [
        'docName' => 'DocName',
        'docNo' => 'DocNo',
        'docType' => 'DocType',
        'merchantBizId' => 'MerchantBizId',
        'merchantUserId' => 'MerchantUserId',
        'productCode' => 'ProductCode',
        'sceneCode' => 'SceneCode',
        'validityEndDate' => 'ValidityEndDate',
        'validityStartDate' => 'ValidityStartDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docName) {
            $res['DocName'] = $this->docName;
        }

        if (null !== $this->docNo) {
            $res['DocNo'] = $this->docNo;
        }

        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }

        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }

        if (null !== $this->merchantUserId) {
            $res['MerchantUserId'] = $this->merchantUserId;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }

        if (null !== $this->validityEndDate) {
            $res['ValidityEndDate'] = $this->validityEndDate;
        }

        if (null !== $this->validityStartDate) {
            $res['ValidityStartDate'] = $this->validityStartDate;
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
        if (isset($map['DocName'])) {
            $model->docName = $map['DocName'];
        }

        if (isset($map['DocNo'])) {
            $model->docNo = $map['DocNo'];
        }

        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }

        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }

        if (isset($map['MerchantUserId'])) {
            $model->merchantUserId = $map['MerchantUserId'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }

        if (isset($map['ValidityEndDate'])) {
            $model->validityEndDate = $map['ValidityEndDate'];
        }

        if (isset($map['ValidityStartDate'])) {
            $model->validityStartDate = $map['ValidityStartDate'];
        }

        return $model;
    }
}
