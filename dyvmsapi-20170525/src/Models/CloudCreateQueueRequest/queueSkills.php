<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateQueueRequest;

use AlibabaCloud\Dara\Model;

class queueSkills extends Model
{
    /**
     * @var int
     */
    public $skillId;

    /**
     * @var int
     */
    public $skillLevel;
    protected $_name = [
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
        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        if (isset($map['SkillLevel'])) {
            $model->skillLevel = $map['SkillLevel'];
        }

        return $model;
    }
}
