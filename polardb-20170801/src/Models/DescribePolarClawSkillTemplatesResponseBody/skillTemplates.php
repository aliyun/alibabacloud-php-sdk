<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawSkillTemplatesResponseBody;

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
    public $id;

    /**
     * @var string
     */
    public $modified;

    /**
     * @var string
     */
    public $skillCounts;

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
     * @var string
     */
    public $skillTemplateType;

    /**
     * @var string
     */
    public $srcApplicationId;
    protected $_name = [
        'created' => 'Created',
        'id' => 'Id',
        'modified' => 'Modified',
        'skillCounts' => 'SkillCounts',
        'skillTemplateDesc' => 'SkillTemplateDesc',
        'skillTemplateId' => 'SkillTemplateId',
        'skillTemplateName' => 'SkillTemplateName',
        'skillTemplateType' => 'SkillTemplateType',
        'srcApplicationId' => 'SrcApplicationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->modified) {
            $res['Modified'] = $this->modified;
        }

        if (null !== $this->skillCounts) {
            $res['SkillCounts'] = $this->skillCounts;
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

        if (null !== $this->skillTemplateType) {
            $res['SkillTemplateType'] = $this->skillTemplateType;
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Modified'])) {
            $model->modified = $map['Modified'];
        }

        if (isset($map['SkillCounts'])) {
            $model->skillCounts = $map['SkillCounts'];
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

        if (isset($map['SkillTemplateType'])) {
            $model->skillTemplateType = $map['SkillTemplateType'];
        }

        if (isset($map['SrcApplicationId'])) {
            $model->srcApplicationId = $map['SrcApplicationId'];
        }

        return $model;
    }
}
