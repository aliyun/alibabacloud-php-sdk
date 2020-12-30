<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\Tea\Model;

class AddConsumerRequest extends Model
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
    public $company;

    /**
     * @var string
     */
    public $site;

    /**
     * @var string
     */
    public $requirement;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $ca;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $bandwidthRequirement;
    protected $_name = [
        'securityToken'        => 'SecurityToken',
        'version'              => 'Version',
        'businessType'         => 'BusinessType',
        'company'              => 'Company',
        'site'                 => 'Site',
        'requirement'          => 'Requirement',
        'mobile'               => 'Mobile',
        'ca'                   => 'Ca',
        'operator'             => 'Operator',
        'email'                => 'Email',
        'bandwidthRequirement' => 'BandwidthRequirement',
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
        if (null !== $this->company) {
            $res['Company'] = $this->company;
        }
        if (null !== $this->site) {
            $res['Site'] = $this->site;
        }
        if (null !== $this->requirement) {
            $res['Requirement'] = $this->requirement;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->ca) {
            $res['Ca'] = $this->ca;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->bandwidthRequirement) {
            $res['BandwidthRequirement'] = $this->bandwidthRequirement;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddConsumerRequest
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
        if (isset($map['Company'])) {
            $model->company = $map['Company'];
        }
        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }
        if (isset($map['Requirement'])) {
            $model->requirement = $map['Requirement'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Ca'])) {
            $model->ca = $map['Ca'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['BandwidthRequirement'])) {
            $model->bandwidthRequirement = $map['BandwidthRequirement'];
        }

        return $model;
    }
}
