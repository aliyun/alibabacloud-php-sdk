<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class UpdateAgentRequest extends Model
{
    /**
     * @example 123@123.com
     *
     * @var string
     */
    public $accountName;

    /**
     * @example 46c1341e-2648-447a-9b11-70b6a298d94d
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @example ccc_xp_pre-cn-***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var int[]
     */
    public $skillGroupId;

    /**
     * @var int[]
     */
    public $skillGroupIdList;
    protected $_name = [
        'accountName'      => 'AccountName',
        'clientToken'      => 'ClientToken',
        'displayName'      => 'DisplayName',
        'instanceId'       => 'InstanceId',
        'skillGroupId'     => 'SkillGroupId',
        'skillGroupIdList' => 'SkillGroupIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->skillGroupIdList) {
            $res['SkillGroupIdList'] = $this->skillGroupIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAgentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SkillGroupId'])) {
            if (!empty($map['SkillGroupId'])) {
                $model->skillGroupId = $map['SkillGroupId'];
            }
        }
        if (isset($map['SkillGroupIdList'])) {
            if (!empty($map['SkillGroupIdList'])) {
                $model->skillGroupIdList = $map['SkillGroupIdList'];
            }
        }

        return $model;
    }
}
