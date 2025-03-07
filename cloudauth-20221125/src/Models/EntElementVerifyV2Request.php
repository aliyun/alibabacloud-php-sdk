<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20221125\Models;

use AlibabaCloud\Tea\Model;

class EntElementVerifyV2Request extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $entName;

    /**
     * @description This parameter is required.
     *
     * @example ENT_2META
     *
     * @var string
     */
    public $infoVerifyType;

    /**
     * @example 1******************9
     *
     * @var string
     */
    public $legalPersonCertNo;

    /**
     * @var string
     */
    public $legalPersonName;

    /**
     * @description This parameter is required.
     *
     * @example 91330106673959****
     *
     * @var string
     */
    public $licenseNo;

    /**
     * @description This parameter is required.
     *
     * @example e0c34a77f5ac40a5aa5e6ed20c35****
     *
     * @var string
     */
    public $merchantBizId;

    /**
     * @description This parameter is required.
     *
     * @example mch7x9a2b4c8d3e5f6g1h2i3j4k5****
     *
     * @var string
     */
    public $merchantUserId;

    /**
     * @description This parameter is required.
     *
     * @example 1000000006
     *
     * @var string
     */
    public $sceneCode;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $userAuthorization;
    protected $_name = [
        'entName'           => 'EntName',
        'infoVerifyType'    => 'InfoVerifyType',
        'legalPersonCertNo' => 'LegalPersonCertNo',
        'legalPersonName'   => 'LegalPersonName',
        'licenseNo'         => 'LicenseNo',
        'merchantBizId'     => 'MerchantBizId',
        'merchantUserId'    => 'MerchantUserId',
        'sceneCode'         => 'SceneCode',
        'userAuthorization' => 'UserAuthorization',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->infoVerifyType) {
            $res['InfoVerifyType'] = $this->infoVerifyType;
        }
        if (null !== $this->legalPersonCertNo) {
            $res['LegalPersonCertNo'] = $this->legalPersonCertNo;
        }
        if (null !== $this->legalPersonName) {
            $res['LegalPersonName'] = $this->legalPersonName;
        }
        if (null !== $this->licenseNo) {
            $res['LicenseNo'] = $this->licenseNo;
        }
        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }
        if (null !== $this->merchantUserId) {
            $res['MerchantUserId'] = $this->merchantUserId;
        }
        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }
        if (null !== $this->userAuthorization) {
            $res['UserAuthorization'] = $this->userAuthorization;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EntElementVerifyV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['InfoVerifyType'])) {
            $model->infoVerifyType = $map['InfoVerifyType'];
        }
        if (isset($map['LegalPersonCertNo'])) {
            $model->legalPersonCertNo = $map['LegalPersonCertNo'];
        }
        if (isset($map['LegalPersonName'])) {
            $model->legalPersonName = $map['LegalPersonName'];
        }
        if (isset($map['LicenseNo'])) {
            $model->licenseNo = $map['LicenseNo'];
        }
        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }
        if (isset($map['MerchantUserId'])) {
            $model->merchantUserId = $map['MerchantUserId'];
        }
        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }
        if (isset($map['UserAuthorization'])) {
            $model->userAuthorization = $map['UserAuthorization'];
        }

        return $model;
    }
}
