<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class ApplyPublicAntChainWithKeyAutoCreationRequest extends Model
{
    /**
     * @var string
     */
    public $bizid;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $countryName;

    /**
     * @var string
     */
    public $localityName;

    /**
     * @var string
     */
    public $organizationName;

    /**
     * @var string
     */
    public $organizationUnitName;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $stateOrProvinceName;
    protected $_name = [
        'bizid'                => 'Bizid',
        'commonName'           => 'CommonName',
        'countryName'          => 'CountryName',
        'localityName'         => 'LocalityName',
        'organizationName'     => 'OrganizationName',
        'organizationUnitName' => 'OrganizationUnitName',
        'password'             => 'Password',
        'stateOrProvinceName'  => 'StateOrProvinceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->countryName) {
            $res['CountryName'] = $this->countryName;
        }
        if (null !== $this->localityName) {
            $res['LocalityName'] = $this->localityName;
        }
        if (null !== $this->organizationName) {
            $res['OrganizationName'] = $this->organizationName;
        }
        if (null !== $this->organizationUnitName) {
            $res['OrganizationUnitName'] = $this->organizationUnitName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->stateOrProvinceName) {
            $res['StateOrProvinceName'] = $this->stateOrProvinceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyPublicAntChainWithKeyAutoCreationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['CountryName'])) {
            $model->countryName = $map['CountryName'];
        }
        if (isset($map['LocalityName'])) {
            $model->localityName = $map['LocalityName'];
        }
        if (isset($map['OrganizationName'])) {
            $model->organizationName = $map['OrganizationName'];
        }
        if (isset($map['OrganizationUnitName'])) {
            $model->organizationUnitName = $map['OrganizationUnitName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['StateOrProvinceName'])) {
            $model->stateOrProvinceName = $map['StateOrProvinceName'];
        }

        return $model;
    }
}
