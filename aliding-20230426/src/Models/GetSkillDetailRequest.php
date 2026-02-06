<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetSkillDetailRequest extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $skillId;

    /**
     * @var string
     */
    public $sourceIdOfAssistantId;
    protected $_name = [
        'groupId' => 'GroupId',
        'skillId' => 'SkillId',
        'sourceIdOfAssistantId' => 'SourceIdOfAssistantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
        }

        if (null !== $this->sourceIdOfAssistantId) {
            $res['SourceIdOfAssistantId'] = $this->sourceIdOfAssistantId;
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        if (isset($map['SourceIdOfAssistantId'])) {
            $model->sourceIdOfAssistantId = $map['SourceIdOfAssistantId'];
        }

        return $model;
    }
}
