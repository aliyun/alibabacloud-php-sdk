<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemResponseBody\checkItems\customConfigs;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemResponseBody\checkItems\description;

class checkItems extends Model
{
    /**
     * @var int
     */
    public $checkId;
    /**
     * @var string
     */
    public $checkShowName;
    /**
     * @var customConfigs[]
     */
    public $customConfigs;
    /**
     * @var description
     */
    public $description;
    /**
     * @var int
     */
    public $estimatedCount;
    /**
     * @var string
     */
    public $instanceSubType;
    /**
     * @var string
     */
    public $instanceType;
    /**
     * @var string
     */
    public $riskLevel;
    /**
     * @var int[]
     */
    public $sectionIds;
    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'checkId'         => 'CheckId',
        'checkShowName'   => 'CheckShowName',
        'customConfigs'   => 'CustomConfigs',
        'description'     => 'Description',
        'estimatedCount'  => 'EstimatedCount',
        'instanceSubType' => 'InstanceSubType',
        'instanceType'    => 'InstanceType',
        'riskLevel'       => 'RiskLevel',
        'sectionIds'      => 'SectionIds',
        'vendor'          => 'Vendor',
    ];

    public function validate()
    {
        if (\is_array($this->customConfigs)) {
            Model::validateArray($this->customConfigs);
        }
        if (null !== $this->description) {
            $this->description->validate();
        }
        if (\is_array($this->sectionIds)) {
            Model::validateArray($this->sectionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->checkShowName) {
            $res['CheckShowName'] = $this->checkShowName;
        }

        if (null !== $this->customConfigs) {
            if (\is_array($this->customConfigs)) {
                $res['CustomConfigs'] = [];
                $n1                   = 0;
                foreach ($this->customConfigs as $item1) {
                    $res['CustomConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = null !== $this->description ? $this->description->toArray($noStream) : $this->description;
        }

        if (null !== $this->estimatedCount) {
            $res['EstimatedCount'] = $this->estimatedCount;
        }

        if (null !== $this->instanceSubType) {
            $res['InstanceSubType'] = $this->instanceSubType;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->sectionIds) {
            if (\is_array($this->sectionIds)) {
                $res['SectionIds'] = [];
                $n1                = 0;
                foreach ($this->sectionIds as $item1) {
                    $res['SectionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['CheckShowName'])) {
            $model->checkShowName = $map['CheckShowName'];
        }

        if (isset($map['CustomConfigs'])) {
            if (!empty($map['CustomConfigs'])) {
                $model->customConfigs = [];
                $n1                   = 0;
                foreach ($map['CustomConfigs'] as $item1) {
                    $model->customConfigs[$n1++] = customConfigs::fromMap($item1);
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = description::fromMap($map['Description']);
        }

        if (isset($map['EstimatedCount'])) {
            $model->estimatedCount = $map['EstimatedCount'];
        }

        if (isset($map['InstanceSubType'])) {
            $model->instanceSubType = $map['InstanceSubType'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['SectionIds'])) {
            if (!empty($map['SectionIds'])) {
                $model->sectionIds = [];
                $n1                = 0;
                foreach ($map['SectionIds'] as $item1) {
                    $model->sectionIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
