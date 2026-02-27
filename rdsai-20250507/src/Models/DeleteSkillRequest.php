<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class DeleteSkillRequest extends Model
{
    /**
     * @var string
     */
    public $skillId;
    protected $_name = [
        'skillId' => 'SkillId',
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

        return $model;
    }
}
