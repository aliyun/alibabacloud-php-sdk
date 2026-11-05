<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreatePolarClawSkillTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applicationType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $skillTemplateDesc;

    /**
     * @var string
     */
    public $skillTemplateName;

    /**
     * @var string
     */
    public $skillTemplateParam;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'applicationType' => 'ApplicationType',
        'regionId' => 'RegionId',
        'skillTemplateDesc' => 'SkillTemplateDesc',
        'skillTemplateName' => 'SkillTemplateName',
        'skillTemplateParam' => 'SkillTemplateParam',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->skillTemplateDesc) {
            $res['SkillTemplateDesc'] = $this->skillTemplateDesc;
        }

        if (null !== $this->skillTemplateName) {
            $res['SkillTemplateName'] = $this->skillTemplateName;
        }

        if (null !== $this->skillTemplateParam) {
            $res['SkillTemplateParam'] = $this->skillTemplateParam;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SkillTemplateDesc'])) {
            $model->skillTemplateDesc = $map['SkillTemplateDesc'];
        }

        if (isset($map['SkillTemplateName'])) {
            $model->skillTemplateName = $map['SkillTemplateName'];
        }

        if (isset($map['SkillTemplateParam'])) {
            $model->skillTemplateParam = $map['SkillTemplateParam'];
        }

        return $model;
    }
}
