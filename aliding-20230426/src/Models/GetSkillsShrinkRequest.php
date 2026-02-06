<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetSkillsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $groupIdsShrink;

    /**
     * @var string
     */
    public $skillIdsShrink;

    /**
     * @var string
     */
    public $sourceIdOfAssistantId;
    protected $_name = [
        'groupIdsShrink' => 'GroupIds',
        'skillIdsShrink' => 'SkillIds',
        'sourceIdOfAssistantId' => 'SourceIdOfAssistantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupIdsShrink) {
            $res['GroupIds'] = $this->groupIdsShrink;
        }

        if (null !== $this->skillIdsShrink) {
            $res['SkillIds'] = $this->skillIdsShrink;
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
        if (isset($map['GroupIds'])) {
            $model->groupIdsShrink = $map['GroupIds'];
        }

        if (isset($map['SkillIds'])) {
            $model->skillIdsShrink = $map['SkillIds'];
        }

        if (isset($map['SourceIdOfAssistantId'])) {
            $model->sourceIdOfAssistantId = $map['SourceIdOfAssistantId'];
        }

        return $model;
    }
}
