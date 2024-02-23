<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListHotlineTransferRegisterFileResponseBody\data;

use AlibabaCloud\Tea\Model;

class values extends Model
{
    /**
     * @description The authenticity of the commitment.
     *
     * @example true
     *
     * @var string
     */
    public $agree;

    /**
     * @description The enterprise name.
     *
     * @example A**
     *
     * @var string
     */
    public $corpName;

    /**
     * @description The China 400 number.
     *
     * @example 400****
     *
     * @var string
     */
    public $hotlineNumber;

    /**
     * @description The ID card number of the handler.
     *
     * @example 5****************9
     *
     * @var string
     */
    public $mngOpIdentityCard;

    /**
     * @description The email address of the handler.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $mngOpMail;

    /**
     * @description The mobile phone number of the handler.
     *
     * @example 150****0000
     *
     * @var string
     */
    public $mngOpMobile;

    /**
     * @description The name of the handler.
     *
     * @example A***
     *
     * @var string
     */
    public $mngOpName;

    /**
     * @description The qualification ID.
     *
     * @example 1234****
     *
     * @var string
     */
    public $qualificationId;

    /**
     * @description The unique code of the query operation.
     *
     * @example 1
     *
     * @var int
     */
    public $resUniqueCode;
    protected $_name = [
        'agree'             => 'Agree',
        'corpName'          => 'CorpName',
        'hotlineNumber'     => 'HotlineNumber',
        'mngOpIdentityCard' => 'MngOpIdentityCard',
        'mngOpMail'         => 'MngOpMail',
        'mngOpMobile'       => 'MngOpMobile',
        'mngOpName'         => 'MngOpName',
        'qualificationId'   => 'QualificationId',
        'resUniqueCode'     => 'ResUniqueCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agree) {
            $res['Agree'] = $this->agree;
        }
        if (null !== $this->corpName) {
            $res['CorpName'] = $this->corpName;
        }
        if (null !== $this->hotlineNumber) {
            $res['HotlineNumber'] = $this->hotlineNumber;
        }
        if (null !== $this->mngOpIdentityCard) {
            $res['MngOpIdentityCard'] = $this->mngOpIdentityCard;
        }
        if (null !== $this->mngOpMail) {
            $res['MngOpMail'] = $this->mngOpMail;
        }
        if (null !== $this->mngOpMobile) {
            $res['MngOpMobile'] = $this->mngOpMobile;
        }
        if (null !== $this->mngOpName) {
            $res['MngOpName'] = $this->mngOpName;
        }
        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }
        if (null !== $this->resUniqueCode) {
            $res['ResUniqueCode'] = $this->resUniqueCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return values
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Agree'])) {
            $model->agree = $map['Agree'];
        }
        if (isset($map['CorpName'])) {
            $model->corpName = $map['CorpName'];
        }
        if (isset($map['HotlineNumber'])) {
            $model->hotlineNumber = $map['HotlineNumber'];
        }
        if (isset($map['MngOpIdentityCard'])) {
            $model->mngOpIdentityCard = $map['MngOpIdentityCard'];
        }
        if (isset($map['MngOpMail'])) {
            $model->mngOpMail = $map['MngOpMail'];
        }
        if (isset($map['MngOpMobile'])) {
            $model->mngOpMobile = $map['MngOpMobile'];
        }
        if (isset($map['MngOpName'])) {
            $model->mngOpName = $map['MngOpName'];
        }
        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }
        if (isset($map['ResUniqueCode'])) {
            $model->resUniqueCode = $map['ResUniqueCode'];
        }

        return $model;
    }
}
