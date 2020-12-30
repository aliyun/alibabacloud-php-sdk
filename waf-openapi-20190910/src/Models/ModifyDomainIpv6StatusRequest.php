<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ModifyDomainIpv6StatusRequest extends Model
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
    public $enabled;

    /**
     * @var string
     */
    public $wafVersion;
    protected $_name = [
        'sourceIp'   => 'SourceIp',
        'lang'       => 'Lang',
        'instanceId' => 'InstanceId',
        'domain'     => 'Domain',
        'enabled'    => 'Enabled',
        'wafVersion' => 'WafVersion',
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
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->wafVersion) {
            $res['WafVersion'] = $this->wafVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDomainIpv6StatusRequest
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['WafVersion'])) {
            $model->wafVersion = $map['WafVersion'];
        }

        return $model;
    }
}
