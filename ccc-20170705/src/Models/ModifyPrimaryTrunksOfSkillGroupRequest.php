<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class ModifyPrimaryTrunksOfSkillGroupRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var string[]
     */
    public $primaryProviderName;
    protected $_name = [
        'instanceId'          => 'InstanceId',
        'skillGroupId'        => 'SkillGroupId',
        'primaryProviderName' => 'PrimaryProviderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->primaryProviderName) {
            $res['PrimaryProviderName'] = $this->primaryProviderName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPrimaryTrunksOfSkillGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['PrimaryProviderName'])) {
            if (!empty($map['PrimaryProviderName'])) {
                $model->primaryProviderName = $map['PrimaryProviderName'];
            }
        }

        return $model;
    }
}
