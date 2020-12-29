<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20180713\Models;

use AlibabaCloud\Tea\Model;

class CreateDVOrderAuditRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $domainVerifyType;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $city;
    protected $_name = [
        'sourceIp'         => 'SourceIp',
        'lang'             => 'Lang',
        'instanceId'       => 'InstanceId',
        'domain'           => 'Domain',
        'domainVerifyType' => 'DomainVerifyType',
        'username'         => 'Username',
        'email'            => 'Email',
        'mobile'           => 'Mobile',
        'province'         => 'Province',
        'city'             => 'City',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->domainVerifyType) {
            $res['DomainVerifyType'] = $this->domainVerifyType;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDVOrderAuditRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['DomainVerifyType'])) {
            $model->domainVerifyType = $map['DomainVerifyType'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        return $model;
    }
}
