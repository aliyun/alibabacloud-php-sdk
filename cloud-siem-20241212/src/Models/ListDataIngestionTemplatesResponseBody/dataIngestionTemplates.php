<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataIngestionTemplatesResponseBody;

use AlibabaCloud\Dara\Model;

class dataIngestionTemplates extends Model
{
    /**
     * @var string
     */
    public $capacityCount;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataIngestionMode;

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
    public $dataIngestionTemplateStatus;

    /**
     * @var string
     */
    public $dataSourceTemplateId;

    /**
     * @var string
     */
    public $normalizationRuleId;

    /**
     * @var string
     */
    public $normalizationRuleName;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'capacityCount' => 'CapacityCount',
        'createTime' => 'CreateTime',
        'dataIngestionMode' => 'DataIngestionMode',
        'dataIngestionStatus' => 'DataIngestionStatus',
        'dataIngestionTemplateId' => 'DataIngestionTemplateId',
        'dataIngestionTemplateName' => 'DataIngestionTemplateName',
        'dataIngestionTemplateStatus' => 'DataIngestionTemplateStatus',
        'dataSourceTemplateId' => 'DataSourceTemplateId',
        'normalizationRuleId' => 'NormalizationRuleId',
        'normalizationRuleName' => 'NormalizationRuleName',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacityCount) {
            $res['CapacityCount'] = $this->capacityCount;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataIngestionMode) {
            $res['DataIngestionMode'] = $this->dataIngestionMode;
        }

        if (null !== $this->dataIngestionStatus) {
            $res['DataIngestionStatus'] = $this->dataIngestionStatus;
        }

        if (null !== $this->dataIngestionTemplateId) {
            $res['DataIngestionTemplateId'] = $this->dataIngestionTemplateId;
        }

        if (null !== $this->dataIngestionTemplateName) {
            $res['DataIngestionTemplateName'] = $this->dataIngestionTemplateName;
        }

        if (null !== $this->dataIngestionTemplateStatus) {
            $res['DataIngestionTemplateStatus'] = $this->dataIngestionTemplateStatus;
        }

        if (null !== $this->dataSourceTemplateId) {
            $res['DataSourceTemplateId'] = $this->dataSourceTemplateId;
        }

        if (null !== $this->normalizationRuleId) {
            $res['NormalizationRuleId'] = $this->normalizationRuleId;
        }

        if (null !== $this->normalizationRuleName) {
            $res['NormalizationRuleName'] = $this->normalizationRuleName;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CapacityCount'])) {
            $model->capacityCount = $map['CapacityCount'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataIngestionMode'])) {
            $model->dataIngestionMode = $map['DataIngestionMode'];
        }

        if (isset($map['DataIngestionStatus'])) {
            $model->dataIngestionStatus = $map['DataIngestionStatus'];
        }

        if (isset($map['DataIngestionTemplateId'])) {
            $model->dataIngestionTemplateId = $map['DataIngestionTemplateId'];
        }

        if (isset($map['DataIngestionTemplateName'])) {
            $model->dataIngestionTemplateName = $map['DataIngestionTemplateName'];
        }

        if (isset($map['DataIngestionTemplateStatus'])) {
            $model->dataIngestionTemplateStatus = $map['DataIngestionTemplateStatus'];
        }

        if (isset($map['DataSourceTemplateId'])) {
            $model->dataSourceTemplateId = $map['DataSourceTemplateId'];
        }

        if (isset($map['NormalizationRuleId'])) {
            $model->normalizationRuleId = $map['NormalizationRuleId'];
        }

        if (isset($map['NormalizationRuleName'])) {
            $model->normalizationRuleName = $map['NormalizationRuleName'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
