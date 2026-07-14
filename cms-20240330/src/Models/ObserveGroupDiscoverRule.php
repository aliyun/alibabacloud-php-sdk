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
        'enabled' => 'enabled',
        'entityType' => 'entityType',
        'entityTypes' => 'entityTypes',
        'gmtCreate' => 'gmtCreate',
        'instanceIds' => 'instanceIds',
        'nameRules' => 'nameRules',
        'regionIds' => 'regionIds',
        'resourceGroupId' => 'resourceGroupId',
        'ruleId' => 'ruleId',
        'ruleType' => 'ruleType',
        'scope' => 'scope',
        'spl' => 'spl',
        'tagRules' => 'tagRules',
        'userId' => 'userId',
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
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->entityType) {
            $res['entityType'] = $this->entityType;
        }

        if (null !== $this->entityTypes) {
            if (\is_array($this->entityTypes)) {
                $res['entityTypes'] = [];
                $n1 = 0;
                foreach ($this->entityTypes as $item1) {
                    $res['entityTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['instanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['instanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nameRules) {
            $res['nameRules'] = null !== $this->nameRules ? $this->nameRules->toArray($noStream) : $this->nameRules;
        }

        if (null !== $this->regionIds) {
            if (\is_array($this->regionIds)) {
                $res['regionIds'] = [];
                $n1 = 0;
                foreach ($this->regionIds as $item1) {
                    $res['regionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }

        if (null !== $this->ruleType) {
            $res['ruleType'] = $this->ruleType;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->spl) {
            $res['spl'] = $this->spl;
        }

        if (null !== $this->tagRules) {
            $res['tagRules'] = null !== $this->tagRules ? $this->tagRules->toArray($noStream) : $this->tagRules;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['entityType'])) {
            $model->entityType = $map['entityType'];
        }

        if (isset($map['entityTypes'])) {
            if (!empty($map['entityTypes'])) {
                $model->entityTypes = [];
                $n1 = 0;
                foreach ($map['entityTypes'] as $item1) {
                    $model->entityTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['instanceIds'])) {
            if (!empty($map['instanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['instanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['nameRules'])) {
            $model->nameRules = nameRules::fromMap($map['nameRules']);
        }

        if (isset($map['regionIds'])) {
            if (!empty($map['regionIds'])) {
                $model->regionIds = [];
                $n1 = 0;
                foreach ($map['regionIds'] as $item1) {
                    $model->regionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        if (isset($map['ruleType'])) {
            $model->ruleType = $map['ruleType'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['spl'])) {
            $model->spl = $map['spl'];
        }

        if (isset($map['tagRules'])) {
            $model->tagRules = tagRules::fromMap($map['tagRules']);
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
