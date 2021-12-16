<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class CreateDcdnCertificateSigningRequestRequest extends Model
{
    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $organization;

    /**
     * @var string
     */
    public $organizationUnit;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $SANs;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'city'             => 'City',
        'commonName'       => 'CommonName',
        'country'          => 'Country',
        'email'            => 'Email',
        'organization'     => 'Organization',
        'organizationUnit' => 'OrganizationUnit',
        'ownerId'          => 'OwnerId',
        'SANs'             => 'SANs',
        'state'            => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->organization) {
            $res['Organization'] = $this->organization;
        }
        if (null !== $this->organizationUnit) {
            $res['OrganizationUnit'] = $this->organizationUnit;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->SANs) {
            $res['SANs'] = $this->SANs;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDcdnCertificateSigningRequestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Organization'])) {
            $model->organization = $map['Organization'];
        }
        if (isset($map['OrganizationUnit'])) {
            $model->organizationUnit = $map['OrganizationUnit'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SANs'])) {
            $model->SANs = $map['SANs'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
