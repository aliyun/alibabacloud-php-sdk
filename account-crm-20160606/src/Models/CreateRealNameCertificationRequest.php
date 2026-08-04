<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class CreateRealNameCertificationRequest extends Model
{
    /**
     * @var string
     */
    public $accountCertifyType;

    /**
     * @var string
     */
    public $corporateLicenseNumber;

    /**
     * @var string
     */
    public $corporateName;

    /**
     * @var string
     */
    public $licenseNumber;

    /**
     * @var string
     */
    public $licenseType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pk;
    protected $_name = [
        'accountCertifyType' => 'AccountCertifyType',
        'corporateLicenseNumber' => 'CorporateLicenseNumber',
        'corporateName' => 'CorporateName',
        'licenseNumber' => 'LicenseNumber',
        'licenseType' => 'LicenseType',
        'name' => 'Name',
        'pk' => 'Pk',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountCertifyType) {
            $res['AccountCertifyType'] = $this->accountCertifyType;
        }

        if (null !== $this->corporateLicenseNumber) {
            $res['CorporateLicenseNumber'] = $this->corporateLicenseNumber;
        }

        if (null !== $this->corporateName) {
            $res['CorporateName'] = $this->corporateName;
        }

        if (null !== $this->licenseNumber) {
            $res['LicenseNumber'] = $this->licenseNumber;
        }

        if (null !== $this->licenseType) {
            $res['LicenseType'] = $this->licenseType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
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
        if (isset($map['AccountCertifyType'])) {
            $model->accountCertifyType = $map['AccountCertifyType'];
        }

        if (isset($map['CorporateLicenseNumber'])) {
            $model->corporateLicenseNumber = $map['CorporateLicenseNumber'];
        }

        if (isset($map['CorporateName'])) {
            $model->corporateName = $map['CorporateName'];
        }

        if (isset($map['LicenseNumber'])) {
            $model->licenseNumber = $map['LicenseNumber'];
        }

        if (isset($map['LicenseType'])) {
            $model->licenseType = $map['LicenseType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        return $model;
    }
}
