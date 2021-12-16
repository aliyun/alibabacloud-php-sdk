<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class DeleteRepoBuildRuleRequest extends Model
{
    /**
     * @var string
     */
    public $buildRuleId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $repoId;
    protected $_name = [
        'buildRuleId' => 'BuildRuleId',
        'instanceId'  => 'InstanceId',
        'regionId'    => 'RegionId',
        'repoId'      => 'RepoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildRuleId) {
            $res['BuildRuleId'] = $this->buildRuleId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRepoBuildRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildRuleId'])) {
            $model->buildRuleId = $map['BuildRuleId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }

        return $model;
    }
}
