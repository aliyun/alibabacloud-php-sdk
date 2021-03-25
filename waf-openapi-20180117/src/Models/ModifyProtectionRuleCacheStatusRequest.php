<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models;

use AlibabaCloud\Tea\Model;

class ModifyProtectionRuleCacheStatusRequest extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $defense;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'domain'     => 'Domain',
        'id'         => 'Id',
        'defense'    => 'Defense',
        'instanceId' => 'InstanceId',
        'region'     => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->defense) {
            $res['Defense'] = $this->defense;
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
     * @return ModifyProtectionRuleCacheStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Defense'])) {
            $model->defense = $map['Defense'];
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
