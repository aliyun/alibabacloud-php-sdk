<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SetDomainRequest extends Model
{
    /**
     * @description The network type of the domain name to be bound. Default value: INTERNET. Valid values:
     *
     *   INTERNET
     *   INTRANET. If you set this parameter to this value, the domain name cannot be used on the Internet.
     *
     * @example RELEASE
     *
     * @var string
     */
    public $bindStageName;

    /**
     * @description Specifies whether this binding relationship takes precedence over the binding relationships between the domain name and other API groups. If you set this parameter to true, this binding relationship takes precedence, and the domain name is automatically unbound from other API groups. This operation brings risks. Proceed with caution.
     *
     * @example INTERNET
     *
     * @var string
     */
    public $customDomainType;

    /**
     * @description The environment which you can access by using the domain name. If you do not specify this parameter, the domain name can be used to access all environments.
     *
     * If you specify an environment, the domain name can be used to access only the specified environment. Valid values:
     *
     *   TEST
     *   PRE
     *   RELEASE
     *
     * If you want to use the domain name to access all environments, set this parameter to an empty string ("").
     * @example api.demo.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The custom domain name.
     *
     * @example 927d50c0f2e54b359919923d908bb015
     *
     * @var string
     */
    public $groupId;

    /**
     * @description Specifies whether to redirect HTTP requests to HTTPS requests.
     *
     * @example false
     *
     * @var bool
     */
    public $isForce;

    /**
     * @description The ID of the request.
     *
     * @example false
     *
     * @var bool
     */
    public $isHttpRedirectToHttps;
    protected $_name = [
        'bindStageName'         => 'BindStageName',
        'customDomainType'      => 'CustomDomainType',
        'domainName'            => 'DomainName',
        'groupId'               => 'GroupId',
        'isForce'               => 'IsForce',
        'isHttpRedirectToHttps' => 'IsHttpRedirectToHttps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindStageName) {
            $res['BindStageName'] = $this->bindStageName;
        }
        if (null !== $this->customDomainType) {
            $res['CustomDomainType'] = $this->customDomainType;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->isForce) {
            $res['IsForce'] = $this->isForce;
        }
        if (null !== $this->isHttpRedirectToHttps) {
            $res['IsHttpRedirectToHttps'] = $this->isHttpRedirectToHttps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindStageName'])) {
            $model->bindStageName = $map['BindStageName'];
        }
        if (isset($map['CustomDomainType'])) {
            $model->customDomainType = $map['CustomDomainType'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['IsForce'])) {
            $model->isForce = $map['IsForce'];
        }
        if (isset($map['IsHttpRedirectToHttps'])) {
            $model->isHttpRedirectToHttps = $map['IsHttpRedirectToHttps'];
        }

        return $model;
    }
}
