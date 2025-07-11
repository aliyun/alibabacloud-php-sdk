<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyDomainShrinkRequest extends Model
{
    /**
     * @description The mode in which you want to add the domain name to WAF. Set the value to share.
     *
     *   **share:** adds the domain name to WAF in CNAME record mode. This is the default value.
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
     * @var string
     */
    public $domainId;

    /**
     * @description The ID of the WAF instance.
     *
     * >  You can call the [DescribeInstance](https://help.aliyun.com/document_detail/433756.html) operation to obtain the ID of the WAF instance.
     *
     * This parameter is required.
     *
     * @example waf_cdnsdf3****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The listener configurations.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $listenShrink;

    /**
     * @description The forwarding configurations.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $redirectShrink;

    /**
     * @description The region where the WAF instance resides. Valid values:
     *
     *   **cn-hangzhou:** the Chinese mainland.
     *   **ap-southeast-1:** outside the Chinese mainland.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accessType' => 'AccessType',
        'domain' => 'Domain',
        'domainId' => 'DomainId',
        'instanceId' => 'InstanceId',
        'listenShrink' => 'Listen',
        'redirectShrink' => 'Redirect',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->listenShrink) {
            $res['Listen'] = $this->listenShrink;
        }
        if (null !== $this->redirectShrink) {
            $res['Redirect'] = $this->redirectShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDomainShrinkRequest
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
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Listen'])) {
            $model->listenShrink = $map['Listen'];
        }
        if (isset($map['Redirect'])) {
            $model->redirectShrink = $map['Redirect'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
