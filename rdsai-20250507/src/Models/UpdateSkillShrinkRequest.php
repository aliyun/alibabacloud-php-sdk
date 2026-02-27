<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class UpdateSkillShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contentShrink;

    /**
     * @var string
     */
    public $dbtypesShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $skillId;
    protected $_name = [
        'contentShrink' => 'Content',
        'dbtypesShrink' => 'Dbtypes',
        'description' => 'Description',
        'name' => 'Name',
        'skillId' => 'SkillId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentShrink) {
            $res['Content'] = $this->contentShrink;
        }

        if (null !== $this->dbtypesShrink) {
            $res['Dbtypes'] = $this->dbtypesShrink;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

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
        if (isset($map['Content'])) {
            $model->contentShrink = $map['Content'];
        }

        if (isset($map['Dbtypes'])) {
            $model->dbtypesShrink = $map['Dbtypes'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        return $model;
    }
}
