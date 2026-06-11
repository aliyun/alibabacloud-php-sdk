<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\skillCheckResult;

class taskResultMessage extends Model
{
    /**
     * @var skillCheckResult
     */
    public $skillCheckResult;
    protected $_name = [
        'skillCheckResult' => 'SkillCheckResult',
    ];

    public function validate()
    {
        if (null !== $this->skillCheckResult) {
            $this->skillCheckResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->skillCheckResult) {
            $res['SkillCheckResult'] = null !== $this->skillCheckResult ? $this->skillCheckResult->toArray($noStream) : $this->skillCheckResult;
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
        if (isset($map['SkillCheckResult'])) {
            $model->skillCheckResult = skillCheckResult::fromMap($map['SkillCheckResult']);
        }

        return $model;
    }
}
