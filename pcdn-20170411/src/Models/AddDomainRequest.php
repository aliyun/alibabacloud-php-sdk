<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\Tea\Model;

class AddDomainRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $liveFormat;

    /**
     * @var string
     */
    public $sliceDomain;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $demoUrls;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'version'       => 'Version',
        'businessType'  => 'BusinessType',
        'domain'        => 'Domain',
        'liveFormat'    => 'LiveFormat',
        'sliceDomain'   => 'SliceDomain',
        'region'        => 'Region',
        'demoUrls'      => 'DemoUrls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->liveFormat) {
            $res['LiveFormat'] = $this->liveFormat;
        }
        if (null !== $this->sliceDomain) {
            $res['SliceDomain'] = $this->sliceDomain;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->demoUrls) {
            $res['DemoUrls'] = $this->demoUrls;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['LiveFormat'])) {
            $model->liveFormat = $map['LiveFormat'];
        }
        if (isset($map['SliceDomain'])) {
            $model->sliceDomain = $map['SliceDomain'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['DemoUrls'])) {
            $model->demoUrls = $map['DemoUrls'];
        }

        return $model;
    }
}
