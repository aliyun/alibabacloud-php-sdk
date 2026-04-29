<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetQueueResponseBody\data;

use AlibabaCloud\Dara\Model;

class queueSkills extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $queueId;

    /**
     * @var int
     */
    public $skillId;

    /**
     * @var int
     */
    public $skillLevel;
    protected $_name = [
        'createTime' => 'CreateTime',
        'enterpriseId' => 'EnterpriseId',
        'id' => 'Id',
        'queueId' => 'QueueId',
        'skillId' => 'SkillId',
        'skillLevel' => 'SkillLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->queueId) {
            $res['QueueId'] = $this->queueId;
        }

        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
        }

        if (null !== $this->skillLevel) {
            $res['SkillLevel'] = $this->skillLevel;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['QueueId'])) {
            $model->queueId = $map['QueueId'];
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        if (isset($map['SkillLevel'])) {
            $model->skillLevel = $map['SkillLevel'];
        }

        return $model;
    }
}
