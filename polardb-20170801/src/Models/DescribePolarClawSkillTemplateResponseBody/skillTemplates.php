<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawSkillTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class skillTemplates extends Model
{
    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $modified;

    /**
     * @var string
     */
    public $skillTemplateDesc;

    /**
     * @var string
     */
    public $skillTemplateId;

    /**
     * @var string
     */
    public $skillTemplateName;

    /**
     * @var string[]
     */
    public $skills;

    /**
     * @var string
     */
    public $srcApplicationId;
    protected $_name = [
        'created' => 'Created',
        'modified' => 'Modified',
        'skillTemplateDesc' => 'SkillTemplateDesc',
        'skillTemplateId' => 'SkillTemplateId',
        'skillTemplateName' => 'SkillTemplateName',
        'skills' => 'Skills',
        'srcApplicationId' => 'SrcApplicationId',
    ];

    public function validate()
    {
        if (\is_array($this->skills)) {
            Model::validateArray($this->skills);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }

        if (null !== $this->modified) {
            $res['Modified'] = $this->modified;
        }

        if (null !== $this->skillTemplateDesc) {
            $res['SkillTemplateDesc'] = $this->skillTemplateDesc;
        }

        if (null !== $this->skillTemplateId) {
            $res['SkillTemplateId'] = $this->skillTemplateId;
        }

        if (null !== $this->skillTemplateName) {
            $res['SkillTemplateName'] = $this->skillTemplateName;
        }

        if (null !== $this->skills) {
            if (\is_array($this->skills)) {
                $res['Skills'] = [];
                foreach ($this->skills as $key1 => $value1) {
                    $res['Skills'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->srcApplicationId) {
            $res['SrcApplicationId'] = $this->srcApplicationId;
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
        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }

        if (isset($map['Modified'])) {
            $model->modified = $map['Modified'];
        }

        if (isset($map['SkillTemplateDesc'])) {
            $model->skillTemplateDesc = $map['SkillTemplateDesc'];
        }

        if (isset($map['SkillTemplateId'])) {
            $model->skillTemplateId = $map['SkillTemplateId'];
        }

        if (isset($map['SkillTemplateName'])) {
            $model->skillTemplateName = $map['SkillTemplateName'];
        }

        if (isset($map['Skills'])) {
            if (!empty($map['Skills'])) {
                $model->skills = [];
                foreach ($map['Skills'] as $key1 => $value1) {
                    $model->skills[$key1] = $value1;
                }
            }
        }

        if (isset($map['SrcApplicationId'])) {
            $model->srcApplicationId = $map['SrcApplicationId'];
        }

        return $model;
    }
}
