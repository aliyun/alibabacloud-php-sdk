<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class Id2MetaPeriodVerifyIntlRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $docName;

    /**
     * @description This parameter is required.
     *
     * @example 411xxxxxxxxxxx0001
     *
     * @var string
     */
    public $docNo;

    /**
     * @description This parameter is required.
     *
     * @example 00000001
     *
     * @var string
     */
    public $docType;

    /**
     * @description This parameter is required.
     *
     * @example e0c34a77f5ac40a5aa5e6ed20c35****
     *
     * @var string
     */
    public $merchantBizId;

    /**
     * @example 1234567890
     *
     * @var string
     */
    public $merchantUserId;

    /**
     * @description This parameter is required.
     *
     * @example eKYC_Date_MIN
     *
     * @var string
     */
    public $productCode;

    /**
     * @example 1234567890
     *
     * @var string
     */
    public $sceneCode;

    /**
     * @description This parameter is required.
     *
     * @example 20301001
     *
     * @var string
     */
    public $validityEndDate;

    /**
     * @description This parameter is required.
     *
     * @example 20201001
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return Id2MetaPeriodVerifyIntlRequest
     */
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
