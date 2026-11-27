<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryConversationDetailInfoNewResponseBody\data;

use AlibabaCloud\Dara\Model;

class frozenSkills extends Model
{
    /**
     * @var string
     */
    public $loadMode;

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
    public $skillVersion;

    /**
     * @var string
     */
    public $versionPolicy;
    protected $_name = [
        'loadMode' => 'LoadMode',
        'skillId' => 'SkillId',
        'skillName' => 'SkillName',
        'skillVersion' => 'SkillVersion',
        'versionPolicy' => 'VersionPolicy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loadMode) {
            $res['LoadMode'] = $this->loadMode;
        }

        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
        }

        if (null !== $this->skillName) {
            $res['SkillName'] = $this->skillName;
        }

        if (null !== $this->skillVersion) {
            $res['SkillVersion'] = $this->skillVersion;
        }

        if (null !== $this->versionPolicy) {
            $res['VersionPolicy'] = $this->versionPolicy;
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
        if (isset($map['LoadMode'])) {
            $model->loadMode = $map['LoadMode'];
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        if (isset($map['SkillName'])) {
            $model->skillName = $map['SkillName'];
        }

        if (isset($map['SkillVersion'])) {
            $model->skillVersion = $map['SkillVersion'];
        }

        if (isset($map['VersionPolicy'])) {
            $model->versionPolicy = $map['VersionPolicy'];
        }

        return $model;
    }
}
