<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListHotlineTransferRegisterFileResponseBody\data;

use AlibabaCloud\Tea\Model;

class values extends Model
{
    /**
     * @var string
     */
    public $mngOpMail;

    /**
     * @var string
     */
    public $mngOpName;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @var string
     */
    public $agree;

    /**
     * @var string
     */
    public $mngOpMobile;

    /**
     * @var string
     */
    public $mngOpIdentityCard;

    /**
     * @var string
     */
    public $hotlineNumber;

    /**
     * @var string
     */
    public $qualificationId;

    /**
     * @var int
     */
    public $resUniqueCode;
    protected $_name = [
        'mngOpMail'         => 'MngOpMail',
        'mngOpName'         => 'MngOpName',
        'corpName'          => 'CorpName',
        'agree'             => 'Agree',
        'mngOpMobile'       => 'MngOpMobile',
        'mngOpIdentityCard' => 'MngOpIdentityCard',
        'hotlineNumber'     => 'HotlineNumber',
        'qualificationId'   => 'QualificationId',
        'resUniqueCode'     => 'ResUniqueCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mngOpMail) {
            $res['MngOpMail'] = $this->mngOpMail;
        }
        if (null !== $this->mngOpName) {
            $res['MngOpName'] = $this->mngOpName;
        }
        if (null !== $this->corpName) {
            $res['CorpName'] = $this->corpName;
        }
        if (null !== $this->agree) {
            $res['Agree'] = $this->agree;
        }
        if (null !== $this->mngOpMobile) {
            $res['MngOpMobile'] = $this->mngOpMobile;
        }
        if (null !== $this->mngOpIdentityCard) {
            $res['MngOpIdentityCard'] = $this->mngOpIdentityCard;
        }
        if (null !== $this->hotlineNumber) {
            $res['HotlineNumber'] = $this->hotlineNumber;
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
        if (isset($map['MngOpMail'])) {
            $model->mngOpMail = $map['MngOpMail'];
        }
        if (isset($map['MngOpName'])) {
            $model->mngOpName = $map['MngOpName'];
        }
        if (isset($map['CorpName'])) {
            $model->corpName = $map['CorpName'];
        }
        if (isset($map['Agree'])) {
            $model->agree = $map['Agree'];
        }
        if (isset($map['MngOpMobile'])) {
            $model->mngOpMobile = $map['MngOpMobile'];
        }
        if (isset($map['MngOpIdentityCard'])) {
            $model->mngOpIdentityCard = $map['MngOpIdentityCard'];
        }
        if (isset($map['HotlineNumber'])) {
            $model->hotlineNumber = $map['HotlineNumber'];
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
