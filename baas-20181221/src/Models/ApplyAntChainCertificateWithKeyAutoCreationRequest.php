<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class ApplyAntChainCertificateWithKeyAutoCreationRequest extends Model
{
    /**
     * @example 1q8B5R9p
     *
     * @var string
     */
    public $antChainId;

    /**
     * @example commonName
     *
     * @var string
     */
    public $commonName;

    /**
     * @example DV80nJXq
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @example countryName
     *
     * @var string
     */
    public $countryName;

    /**
     * @example localityName
     *
     * @var string
     */
    public $localityName;

    /**
     * @example organizationName
     *
     * @var string
     */
    public $organizationName;

    /**
     * @example organizationUnitName
     *
     * @var string
     */
    public $organizationUnitName;

    /**
     * @example password
     *
     * @var string
     */
    public $password;

    /**
     * @example stateOrProvinceName
     *
     * @var string
     */
    public $stateOrProvinceName;
    protected $_name = [
        'antChainId'           => 'AntChainId',
        'commonName'           => 'CommonName',
        'consortiumId'         => 'ConsortiumId',
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
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
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
     * @return ApplyAntChainCertificateWithKeyAutoCreationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
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
