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
     * @var string[]
     */
    public $primaryProviderName;

    /**
     * @var string
     */
    public $skillGroupId;
    protected $_name = [
        'instanceId'          => 'InstanceId',
        'primaryProviderName' => 'PrimaryProviderName',
        'skillGroupId'        => 'SkillGroupId',
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
        if (null !== $this->primaryProviderName) {
            $res['PrimaryProviderName'] = $this->primaryProviderName;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
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
        if (isset($map['PrimaryProviderName'])) {
            if (!empty($map['PrimaryProviderName'])) {
                $model->primaryProviderName = $map['PrimaryProviderName'];
            }
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        return $model;
    }
}
