<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models;

use AlibabaCloud\Tea\Model;

class CreateProtectionModuleRuleRequest extends Model
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
    public $domain;

    /**
     * @var string
     */
    public $defense;

    /**
     * @var string
     */
    public $rule;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'sourceIp'   => 'SourceIp',
        'lang'       => 'Lang',
        'domain'     => 'Domain',
        'defense'    => 'Defense',
        'rule'       => 'Rule',
        'instanceId' => 'InstanceId',
        'region'     => 'Region',
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
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->defense) {
            $res['Defense'] = $this->defense;
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProtectionModuleRuleRequest
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Defense'])) {
            $model->defense = $map['Defense'];
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
