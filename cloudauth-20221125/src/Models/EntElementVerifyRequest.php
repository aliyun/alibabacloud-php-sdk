<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20221125\Models;

use AlibabaCloud\Tea\Model;

class EntElementVerifyRequest extends Model
{
    /**
     * @var string
     */
    public $entName;

    /**
     * @example ENT_2META
     *
     * @var string
     */
    public $infoVerifyType;

    /**
     * @example 370105*****3892
     *
     * @var string
     */
    public $legalPersonCertNo;

    /**
     * @var string
     */
    public $legalPersonName;

    /**
     * @example 32132***328932
     *
     * @var string
     */
    public $licenseNo;

    /**
     * @example 32198****193000
     *
     * @var string
     */
    public $merchantBizId;

    /**
     * @example 432***421
     *
     * @var string
     */
    public $merchantUserId;

    /**
     * @example withdraw
     *
     * @var string
     */
    public $sceneCode;

    /**
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
     * @return EntElementVerifyRequest
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
