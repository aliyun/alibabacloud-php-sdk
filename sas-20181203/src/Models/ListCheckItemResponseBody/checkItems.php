<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemResponseBody\checkItems\customConfigs;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemResponseBody\checkItems\description;
use AlibabaCloud\Tea\Model;

class checkItems extends Model
{
    /**
     * @example 21
     *
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
     * @example ECS
     *
     * @var string
     */
    public $instanceSubType;

    /**
     * @example OSS
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example HIGH
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @var int[]
     */
    public $sectionIds;

    /**
     * @example 0
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'checkId'         => 'CheckId',
        'checkShowName'   => 'CheckShowName',
        'customConfigs'   => 'CustomConfigs',
        'description'     => 'Description',
        'instanceSubType' => 'InstanceSubType',
        'instanceType'    => 'InstanceType',
        'riskLevel'       => 'RiskLevel',
        'sectionIds'      => 'SectionIds',
        'vendor'          => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->checkShowName) {
            $res['CheckShowName'] = $this->checkShowName;
        }
        if (null !== $this->customConfigs) {
            $res['CustomConfigs'] = [];
            if (null !== $this->customConfigs && \is_array($this->customConfigs)) {
                $n = 0;
                foreach ($this->customConfigs as $item) {
                    $res['CustomConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = null !== $this->description ? $this->description->toMap() : null;
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
            $res['SectionIds'] = $this->sectionIds;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkItems
     */
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
                $n                    = 0;
                foreach ($map['CustomConfigs'] as $item) {
                    $model->customConfigs[$n++] = null !== $item ? customConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = description::fromMap($map['Description']);
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
                $model->sectionIds = $map['SectionIds'];
            }
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
