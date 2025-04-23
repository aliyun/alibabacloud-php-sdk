<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class UpdateRamPolicyExportTaskAttributeRequest extends Model
{
    /**
     * @var int[]
     */
    public $authorizationAccountIds;

    /**
     * @var string[]
     */
    public $authorizationActions;

    /**
     * @var string[]
     */
    public $authorizationRegionIds;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ramRole;

    /**
     * @var string
     */
    public $triggerStrategy;
    protected $_name = [
        'authorizationAccountIds' => 'authorizationAccountIds',
        'authorizationActions' => 'authorizationActions',
        'authorizationRegionIds' => 'authorizationRegionIds',
        'moduleId' => 'moduleId',
        'moduleVersion' => 'moduleVersion',
        'name' => 'name',
        'ramRole' => 'ramRole',
        'triggerStrategy' => 'triggerStrategy',
    ];

    public function validate()
    {
        if (\is_array($this->authorizationAccountIds)) {
            Model::validateArray($this->authorizationAccountIds);
        }
        if (\is_array($this->authorizationActions)) {
            Model::validateArray($this->authorizationActions);
        }
        if (\is_array($this->authorizationRegionIds)) {
            Model::validateArray($this->authorizationRegionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationAccountIds) {
            if (\is_array($this->authorizationAccountIds)) {
                $res['authorizationAccountIds'] = [];
                $n1 = 0;
                foreach ($this->authorizationAccountIds as $item1) {
                    $res['authorizationAccountIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->authorizationActions) {
            if (\is_array($this->authorizationActions)) {
                $res['authorizationActions'] = [];
                $n1 = 0;
                foreach ($this->authorizationActions as $item1) {
                    $res['authorizationActions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->authorizationRegionIds) {
            if (\is_array($this->authorizationRegionIds)) {
                $res['authorizationRegionIds'] = [];
                $n1 = 0;
                foreach ($this->authorizationRegionIds as $item1) {
                    $res['authorizationRegionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }

        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->ramRole) {
            $res['ramRole'] = $this->ramRole;
        }

        if (null !== $this->triggerStrategy) {
            $res['triggerStrategy'] = $this->triggerStrategy;
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
        if (isset($map['authorizationAccountIds'])) {
            if (!empty($map['authorizationAccountIds'])) {
                $model->authorizationAccountIds = [];
                $n1 = 0;
                foreach ($map['authorizationAccountIds'] as $item1) {
                    $model->authorizationAccountIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['authorizationActions'])) {
            if (!empty($map['authorizationActions'])) {
                $model->authorizationActions = [];
                $n1 = 0;
                foreach ($map['authorizationActions'] as $item1) {
                    $model->authorizationActions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['authorizationRegionIds'])) {
            if (!empty($map['authorizationRegionIds'])) {
                $model->authorizationRegionIds = [];
                $n1 = 0;
                foreach ($map['authorizationRegionIds'] as $item1) {
                    $model->authorizationRegionIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }

        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['ramRole'])) {
            $model->ramRole = $map['ramRole'];
        }

        if (isset($map['triggerStrategy'])) {
            $model->triggerStrategy = $map['triggerStrategy'];
        }

        return $model;
    }
}
