<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class CreateCdnCertificateSigningRequestRequest extends Model
{
    /**
     * @description The city to which the organization belongs. Default value: Hangzhou.
     *
     * @example Hangzhou
     *
     * @var string
     */
    public $city;

    /**
     * @description The Common Name of the SSL certificate.
     *
     * @example CommonName
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The country to which the organization belongs. Default value: CN.
     *
     * @example CN
     *
     * @var string
     */
    public $country;

    /**
     * @description The email address that can be used to contact the organization.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The name of the organization. Default value: Alibaba Inc.
     *
     * @example Alibaba Inc
     *
     * @var string
     */
    public $organization;

    /**
     * @description The name of the organization unit. Default value: Aliyun CDN.
     *
     * @example Aliyun CDN
     *
     * @var string
     */
    public $organizationUnit;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The Subject Alternative Name (SAN) extension of the SSL certificate. This extension is used to add domain names to the certificate. Separate multiple domain names with commas (,).
     *
     * @example example.com
     *
     * @var string
     */
    public $SANs;

    /**
     * @description The provincial district to which the organization belongs. Default value: Zhejiang.
     *
     * @example Zhejiang
     *
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
     * @return CreateCdnCertificateSigningRequestRequest
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
