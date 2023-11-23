<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models\QueryCustInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $certifyType;

    /**
     * @var string
     */
    public $contactPhone;

    /**
     * @var int
     */
    public $custId;

    /**
     * @var string
     */
    public $custName;

    /**
     * @var bool
     */
    public $isDayuCustomer;

    /**
     * @var int
     */
    public $osStatus;

    /**
     * @var int
     */
    public $partnerId;

    /**
     * @var int
     */
    public $userTag;

    /**
     * @var int
     */
    public $userTag2;
    protected $_name = [
        'certifyType'    => 'CertifyType',
        'contactPhone'   => 'ContactPhone',
        'custId'         => 'CustId',
        'custName'       => 'CustName',
        'isDayuCustomer' => 'IsDayuCustomer',
        'osStatus'       => 'OsStatus',
        'partnerId'      => 'PartnerId',
        'userTag'        => 'UserTag',
        'userTag2'       => 'UserTag2',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certifyType) {
            $res['CertifyType'] = $this->certifyType;
        }
        if (null !== $this->contactPhone) {
            $res['ContactPhone'] = $this->contactPhone;
        }
        if (null !== $this->custId) {
            $res['CustId'] = $this->custId;
        }
        if (null !== $this->custName) {
            $res['CustName'] = $this->custName;
        }
        if (null !== $this->isDayuCustomer) {
            $res['IsDayuCustomer'] = $this->isDayuCustomer;
        }
        if (null !== $this->osStatus) {
            $res['OsStatus'] = $this->osStatus;
        }
        if (null !== $this->partnerId) {
            $res['PartnerId'] = $this->partnerId;
        }
        if (null !== $this->userTag) {
            $res['UserTag'] = $this->userTag;
        }
        if (null !== $this->userTag2) {
            $res['UserTag2'] = $this->userTag2;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertifyType'])) {
            $model->certifyType = $map['CertifyType'];
        }
        if (isset($map['ContactPhone'])) {
            $model->contactPhone = $map['ContactPhone'];
        }
        if (isset($map['CustId'])) {
            $model->custId = $map['CustId'];
        }
        if (isset($map['CustName'])) {
            $model->custName = $map['CustName'];
        }
        if (isset($map['IsDayuCustomer'])) {
            $model->isDayuCustomer = $map['IsDayuCustomer'];
        }
        if (isset($map['OsStatus'])) {
            $model->osStatus = $map['OsStatus'];
        }
        if (isset($map['PartnerId'])) {
            $model->partnerId = $map['PartnerId'];
        }
        if (isset($map['UserTag'])) {
            $model->userTag = $map['UserTag'];
        }
        if (isset($map['UserTag2'])) {
            $model->userTag2 = $map['UserTag2'];
        }

        return $model;
    }
}
