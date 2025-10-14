<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class UpdateDataIngestionTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $dataIngestionStatus;

    /**
     * @var string
     */
    public $dataIngestionTemplateId;

    /**
     * @var string
     */
    public $dataIngestionTemplateName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $normalizationRuleId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;
    protected $_name = [
        'dataIngestionStatus' => 'DataIngestionStatus',
        'dataIngestionTemplateId' => 'DataIngestionTemplateId',
        'dataIngestionTemplateName' => 'DataIngestionTemplateName',
        'lang' => 'Lang',
        'normalizationRuleId' => 'NormalizationRuleId',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataIngestionStatus) {
            $res['DataIngestionStatus'] = $this->dataIngestionStatus;
        }

        if (null !== $this->dataIngestionTemplateId) {
            $res['DataIngestionTemplateId'] = $this->dataIngestionTemplateId;
        }

        if (null !== $this->dataIngestionTemplateName) {
            $res['DataIngestionTemplateName'] = $this->dataIngestionTemplateName;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->normalizationRuleId) {
            $res['NormalizationRuleId'] = $this->normalizationRuleId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
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
        if (isset($map['DataIngestionStatus'])) {
            $model->dataIngestionStatus = $map['DataIngestionStatus'];
        }

        if (isset($map['DataIngestionTemplateId'])) {
            $model->dataIngestionTemplateId = $map['DataIngestionTemplateId'];
        }

        if (isset($map['DataIngestionTemplateName'])) {
            $model->dataIngestionTemplateName = $map['DataIngestionTemplateName'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['NormalizationRuleId'])) {
            $model->normalizationRuleId = $map['NormalizationRuleId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        return $model;
    }
}
