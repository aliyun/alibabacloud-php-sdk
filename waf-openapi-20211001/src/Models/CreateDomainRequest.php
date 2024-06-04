<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainRequest\listen;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainRequest\redirect;
use AlibabaCloud\Tea\Model;

class CreateDomainRequest extends Model
{
    /**
     * @description The mode in which you want to add the domain name to WAF. Valid values:
     *
     *   **share:** adds the domain name to WAF in CNAME record mode. This is the default value.
     *   **hybrid_cloud_cname:** adds the domain name to WAF in hybrid cloud reverse proxy mode.
     *
     * @example share
     *
     * @var string
     */
    public $accessType;

    /**
     * @description The domain name that you want to add to WAF.
     *
     * This parameter is required.
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     * This parameter is required.
     * @example waf_cdnsdf3****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The configurations of the listeners.
     *
     * This parameter is required.
     * @var listen
     */
    public $listen;

    /**
     * @description The configurations of the forwarding rule.
     *
     * This parameter is required.
     * @var redirect
     */
    public $redirect;

    /**
     * @description The region where the WAF instance resides. Valid values:
     *
     *   **cn-hangzhou**: the Chinese mainland
     *   **ap-southeast-1**: outside the Chinese mainland
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;
    protected $_name = [
        'accessType'                     => 'AccessType',
        'domain'                         => 'Domain',
        'instanceId'                     => 'InstanceId',
        'listen'                         => 'Listen',
        'redirect'                       => 'Redirect',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
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

        return $model;
    }
}
