<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20221125\Models;

use AlibabaCloud\Dara\Model;

class EntElementVerifyPRORequest extends Model
{
    /**
     * @var string
     */
    public $entName;

    /**
     * @var string
     */
    public $infoVerifyType;

    /**
     * @var string
     */
    public $legalPersonCertNo;

    /**
     * @var string
     */
    public $legalPersonName;

    /**
     * @var string
     */
    public $licenseNo;

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
    public $sceneCode;

    /**
     * @var string
     */
    public $userAuthorization;
    protected $_name = [
        'entName' => 'EntName',
        'infoVerifyType' => 'InfoVerifyType',
        'legalPersonCertNo' => 'LegalPersonCertNo',
        'legalPersonName' => 'LegalPersonName',
        'licenseNo' => 'LicenseNo',
        'merchantBizId' => 'MerchantBizId',
        'merchantUserId' => 'MerchantUserId',
        'sceneCode' => 'SceneCode',
        'userAuthorization' => 'UserAuthorization',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
