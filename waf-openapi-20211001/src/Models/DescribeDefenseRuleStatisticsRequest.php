<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeDefenseRuleStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $fourthKey;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $primaryKey;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @var string
     */
    public $secondaryKey;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $thirdKey;
    protected $_name = [
        'fourthKey' => 'FourthKey',
        'instanceId' => 'InstanceId',
        'primaryKey' => 'PrimaryKey',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'secondaryKey' => 'SecondaryKey',
        'templateId' => 'TemplateId',
        'thirdKey' => 'ThirdKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fourthKey) {
            $res['FourthKey'] = $this->fourthKey;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->primaryKey) {
            $res['PrimaryKey'] = $this->primaryKey;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        if (null !== $this->secondaryKey) {
            $res['SecondaryKey'] = $this->secondaryKey;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->thirdKey) {
            $res['ThirdKey'] = $this->thirdKey;
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
        if (isset($map['FourthKey'])) {
            $model->fourthKey = $map['FourthKey'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PrimaryKey'])) {
            $model->primaryKey = $map['PrimaryKey'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        if (isset($map['SecondaryKey'])) {
            $model->secondaryKey = $map['SecondaryKey'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['ThirdKey'])) {
            $model->thirdKey = $map['ThirdKey'];
        }

        return $model;
    }
}
