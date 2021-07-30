<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListHotlineTransferNumberResponseBody\data;

use AlibabaCloud\Tea\Model;

class values extends Model
{
    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $numberOwnerName;

    /**
     * @var string
     */
    public $qualificationId;

    /**
     * @var string
     */
    public $hotlineNumber;

    /**
     * @var string
     */
    public $identityCard;

    /**
     * @var string
     */
    public $resUniqueCode;
    protected $_name = [
        'phoneNumber'     => 'PhoneNumber',
        'numberOwnerName' => 'NumberOwnerName',
        'qualificationId' => 'QualificationId',
        'hotlineNumber'   => 'HotlineNumber',
        'identityCard'    => 'IdentityCard',
        'resUniqueCode'   => 'ResUniqueCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->numberOwnerName) {
            $res['NumberOwnerName'] = $this->numberOwnerName;
        }
        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }
        if (null !== $this->hotlineNumber) {
            $res['HotlineNumber'] = $this->hotlineNumber;
        }
        if (null !== $this->identityCard) {
            $res['IdentityCard'] = $this->identityCard;
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
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['NumberOwnerName'])) {
            $model->numberOwnerName = $map['NumberOwnerName'];
        }
        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }
        if (isset($map['HotlineNumber'])) {
            $model->hotlineNumber = $map['HotlineNumber'];
        }
        if (isset($map['IdentityCard'])) {
            $model->identityCard = $map['IdentityCard'];
        }
        if (isset($map['ResUniqueCode'])) {
            $model->resUniqueCode = $map['ResUniqueCode'];
        }

        return $model;
    }
}
