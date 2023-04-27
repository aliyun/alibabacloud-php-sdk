<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainRequest\listen;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainRequest\redirect;
use AlibabaCloud\Tea\Model;

class CreateDomainRequest extends Model
{
    /**
     * @description $.parameters[3].schema.properties.ExclusiveIp.description
     *
     * @example share
     *
     * @var string
     */
    public $accessType;

    /**
     * @description $.parameters[3].schema.properties.Http2Enabled.description
     *
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description $.parameters[3].schema.properties.HttpPorts.enumValueTitles
     *
     * @example waf_cdnsdf3****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description $.parameters[3].schema.properties.Http2Enabled.example
     *
     * @var listen
     */
    public $listen;

    /**
     * @description $.parameters[3].schema.properties.CustomCiphers.enumValueTitles
     *
     * @var redirect
     */
    public $redirect;

    /**
     * @description $.parameters[3].schema.properties.ProtectionResource.enumValueTitles
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description $.parameters[3].schema.properties.ExclusiveIp.example
     *
     * @example 0.0.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'accessType'                     => 'AccessType',
        'domain'                         => 'Domain',
        'instanceId'                     => 'InstanceId',
        'listen'                         => 'Listen',
        'redirect'                       => 'Redirect',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'sourceIp'                       => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->listen) {
            $res['Listen'] = null !== $this->listen ? $this->listen->toMap() : null;
        }
        if (null !== $this->redirect) {
            $res['Redirect'] = null !== $this->redirect ? $this->redirect->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Listen'])) {
            $model->listen = listen::fromMap($map['Listen']);
        }
        if (isset($map['Redirect'])) {
            $model->redirect = redirect::fromMap($map['Redirect']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
