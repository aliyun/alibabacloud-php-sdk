<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryCredentialsInfoResponseBody;

use AlibabaCloud\Tea\Model;

class credentialsInfo extends Model
{
    /**
     * @var string
     */
    public $cardNumber;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $personName;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $companyName;
    protected $_name = [
        'cardNumber'  => 'CardNumber',
        'address'     => 'Address',
        'personName'  => 'PersonName',
        'province'    => 'Province',
        'companyName' => 'CompanyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->personName) {
            $res['PersonName'] = $this->personName;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return credentialsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['PersonName'])) {
            $model->personName = $map['PersonName'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }

        return $model;
    }
}
