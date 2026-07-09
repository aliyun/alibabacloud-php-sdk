<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ObserveGroupDiscoverRule\nameRules;
use AlibabaCloud\SDK\Cms\V20240330\Models\ObserveGroupDiscoverRule\tagRules;

class ObserveGroupDiscoverRule extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string[]
     */
    public $entityTypes;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var nameRules
     */
    public $nameRules;

    /**
     * @var string[]
     */
    public $regionIds;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $spl;

    /**
     * @var tagRules
     */
    public $tagRules;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'enabled' => 'Enabled',
        'entityType' => 'EntityType',
        'entityTypes' => 'EntityTypes',
        'gmtCreate' => 'GmtCreate',
        'instanceIds' => 'InstanceIds',
        'nameRules' => 'NameRules',
        'regionIds' => 'RegionIds',
        'resourceGroupId' => 'ResourceGroupId',
        'ruleId' => 'RuleId',
        'ruleType' => 'RuleType',
        'scope' => 'Scope',
        'spl' => 'Spl',
        'tagRules' => 'TagRules',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->entityTypes)) {
            Model::validateArray($this->entityTypes);
        }
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (null !== $this->nameRules) {
            $this->nameRules->validate();
        }
        if (\is_array($this->regionIds)) {
            Model::validateArray($this->regionIds);
        }
        if (null !== $this->tagRules) {
            $this->tagRules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->entityTypes) {
            if (\is_array($this->entityTypes)) {
                $res['EntityTypes'] = [];
                $n1 = 0;
                foreach ($this->entityTypes as $item1) {
                    $res['EntityTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nameRules) {
            $res['NameRules'] = null !== $this->nameRules ? $this->nameRules->toArray($noStream) : $this->nameRules;
        }

        if (null !== $this->regionIds) {
            if (\is_array($this->regionIds)) {
                $res['RegionIds'] = [];
                $n1 = 0;
                foreach ($this->regionIds as $item1) {
                    $res['RegionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->spl) {
            $res['Spl'] = $this->spl;
        }

        if (null !== $this->tagRules) {
            $res['TagRules'] = null !== $this->tagRules ? $this->tagRules->toArray($noStream) : $this->tagRules;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['EntityTypes'])) {
            if (!empty($map['EntityTypes'])) {
                $model->entityTypes = [];
                $n1 = 0;
                foreach ($map['EntityTypes'] as $item1) {
                    $model->entityTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NameRules'])) {
            $model->nameRules = nameRules::fromMap($map['NameRules']);
        }

        if (isset($map['RegionIds'])) {
            if (!empty($map['RegionIds'])) {
                $model->regionIds = [];
                $n1 = 0;
                foreach ($map['RegionIds'] as $item1) {
                    $model->regionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['Spl'])) {
            $model->spl = $map['Spl'];
        }

        if (isset($map['TagRules'])) {
            $model->tagRules = tagRules::fromMap($map['TagRules']);
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
