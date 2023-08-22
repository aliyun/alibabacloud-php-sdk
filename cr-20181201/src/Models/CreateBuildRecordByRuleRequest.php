<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateBuildRecordByRuleRequest extends Model
{
    /**
     * @description The ID of the image building rule.
     *
     * @example crbr-1j95g4bu2s1i****
     *
     * @var string
     */
    public $buildRuleId;

    /**
     * @description The ID of the instance.
     *
     * @example cri-asd6vujuhay0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the image repository.
     *
     * @example crr-8dz3aedjqlmk****
     *
     * @var string
     */
    public $repoId;
    protected $_name = [
        'buildRuleId' => 'BuildRuleId',
        'instanceId'  => 'InstanceId',
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
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBuildRecordByRuleRequest
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
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }

        return $model;
    }
}
