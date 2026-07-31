<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeJVSInstanceResponseBody\data;

use AlibabaCloud\Dara\Model;

class installedSkills extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $iconUrl;

    /**
     * @var string
     */
    public $installedAt;

    /**
     * @var string
     */
    public $skillId;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $skillType;
    protected $_name = [
        'description' => 'Description',
        'iconUrl' => 'IconUrl',
        'installedAt' => 'InstalledAt',
        'skillId' => 'SkillId',
        'skillName' => 'SkillName',
        'skillType' => 'SkillType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->iconUrl) {
            $res['IconUrl'] = $this->iconUrl;
        }

        if (null !== $this->installedAt) {
            $res['InstalledAt'] = $this->installedAt;
        }

        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
        }

        if (null !== $this->skillName) {
            $res['SkillName'] = $this->skillName;
        }

        if (null !== $this->skillType) {
            $res['SkillType'] = $this->skillType;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IconUrl'])) {
            $model->iconUrl = $map['IconUrl'];
        }

        if (isset($map['InstalledAt'])) {
            $model->installedAt = $map['InstalledAt'];
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        if (isset($map['SkillName'])) {
            $model->skillName = $map['SkillName'];
        }

        if (isset($map['SkillType'])) {
            $model->skillType = $map['SkillType'];
        }

        return $model;
    }
}
