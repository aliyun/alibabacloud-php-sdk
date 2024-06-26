<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class ApplyAntChainWithKeyAutoCreationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $antChainId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $commonName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $countryName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $localityName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $organizationName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $organizationUnitName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $password;

    /**
     * @description This parameter is required.
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
     * @return ApplyAntChainWithKeyAutoCreationRequest
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
