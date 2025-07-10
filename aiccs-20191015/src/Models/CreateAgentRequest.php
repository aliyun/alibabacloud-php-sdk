<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class CreateAgentRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $displayName;

    /**
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
        'accountName' => 'AccountName',
        'clientToken' => 'ClientToken',
        'displayName' => 'DisplayName',
        'instanceId' => 'InstanceId',
        'skillGroupId' => 'SkillGroupId',
        'skillGroupIdList' => 'SkillGroupIdList',
    ];

    public function validate()
    {
        if (\is_array($this->skillGroupId)) {
            Model::validateArray($this->skillGroupId);
        }
        if (\is_array($this->skillGroupIdList)) {
            Model::validateArray($this->skillGroupIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->skillGroupId)) {
                $res['SkillGroupId'] = [];
                $n1 = 0;
                foreach ($this->skillGroupId as $item1) {
                    $res['SkillGroupId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skillGroupIdList) {
            if (\is_array($this->skillGroupIdList)) {
                $res['SkillGroupIdList'] = [];
                $n1 = 0;
                foreach ($this->skillGroupIdList as $item1) {
                    $res['SkillGroupIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->skillGroupId = [];
                $n1 = 0;
                foreach ($map['SkillGroupId'] as $item1) {
                    $model->skillGroupId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SkillGroupIdList'])) {
            if (!empty($map['SkillGroupIdList'])) {
                $model->skillGroupIdList = [];
                $n1 = 0;
                foreach ($map['SkillGroupIdList'] as $item1) {
                    $model->skillGroupIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
