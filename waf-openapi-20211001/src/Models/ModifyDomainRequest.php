<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainRequest\listen;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainRequest\redirect;
use AlibabaCloud\Tea\Model;

class ModifyDomainRequest extends Model
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
     * @description The domain name whose access configurations you want to modify.
     *
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the WAF instance.
     *
     * >  You can call the [DescribeInstance](~~433756~~) operation to obtain the ID of the WAF instance.
     * @example waf_cdnsdf3****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The configurations of the listeners.
     *
     * @var listen
     */
    public $listen;

    /**
     * @description The configurations of the forwarding rule.
     *
     * @var redirect
     */
    public $redirect;

    /**
     * @description The region where the WAF instance resides. Valid values:
     *
     *   **cn-hangzhou:** the Chinese mainland.
     *   **ap-southeast-1:** outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The source IP address of the request. The value of this parameter is specified by the system.
     *
     * @example 0.0.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'accessType' => 'AccessType',
        'domain'     => 'Domain',
        'instanceId' => 'InstanceId',
        'listen'     => 'Listen',
        'redirect'   => 'Redirect',
        'regionId'   => 'RegionId',
        'sourceIp'   => 'SourceIp',
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
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDomainRequest
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
