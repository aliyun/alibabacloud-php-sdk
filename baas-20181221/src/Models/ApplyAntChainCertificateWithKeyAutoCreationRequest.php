<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class ApplyAntChainCertificateWithKeyAutoCreationRequest extends Model
{
    /**
     * @var string
     */
    public $antChainId;

    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $countryName;

    /**
     * @var string
     */
    public $stateOrProvinceName;

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
    public $commonName;
    protected $_name = [
        'antChainId'           => 'AntChainId',
        'consortiumId'         => 'ConsortiumId',
        'password'             => 'Password',
        'countryName'          => 'CountryName',
        'stateOrProvinceName'  => 'StateOrProvinceName',
        'localityName'         => 'LocalityName',
        'organizationName'     => 'OrganizationName',
        'organizationUnitName' => 'OrganizationUnitName',
        'commonName'           => 'CommonName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->countryName) {
            $res['CountryName'] = $this->countryName;
        }
        if (null !== $this->stateOrProvinceName) {
            $res['StateOrProvinceName'] = $this->stateOrProvinceName;
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
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyAntChainCertificateWithKeyAutoCreationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['CountryName'])) {
            $model->countryName = $map['CountryName'];
        }
        if (isset($map['StateOrProvinceName'])) {
            $model->stateOrProvinceName = $map['StateOrProvinceName'];
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
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }

        return $model;
    }
}
