<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AssociateResourceShareRequest\resources;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AssociateResourceShareRequest\targetProperties;

class AssociateResourceShareRequest extends Model
{
    /**
     * @var string[]
     */
    public $permissionNames;

    /**
     * @var string[]
     */
    public $resourceArns;

    /**
     * @var string
     */
    public $resourceShareId;

    /**
     * @var resources[]
     */
    public $resources;

    /**
     * @var targetProperties[]
     */
    public $targetProperties;

    /**
     * @var string[]
     */
    public $targets;
    protected $_name = [
        'permissionNames' => 'PermissionNames',
        'resourceArns' => 'ResourceArns',
        'resourceShareId' => 'ResourceShareId',
        'resources' => 'Resources',
        'targetProperties' => 'TargetProperties',
        'targets' => 'Targets',
    ];

    public function validate()
    {
        if (\is_array($this->permissionNames)) {
            Model::validateArray($this->permissionNames);
        }
        if (\is_array($this->resourceArns)) {
            Model::validateArray($this->resourceArns);
        }
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        if (\is_array($this->targetProperties)) {
            Model::validateArray($this->targetProperties);
        }
        if (\is_array($this->targets)) {
            Model::validateArray($this->targets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->permissionNames) {
            if (\is_array($this->permissionNames)) {
                $res['PermissionNames'] = [];
                $n1 = 0;
                foreach ($this->permissionNames as $item1) {
                    $res['PermissionNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceArns) {
            if (\is_array($this->resourceArns)) {
                $res['ResourceArns'] = [];
                $n1 = 0;
                foreach ($this->resourceArns as $item1) {
                    $res['ResourceArns'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceShareId) {
            $res['ResourceShareId'] = $this->resourceShareId;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['Resources'] = [];
                $n1 = 0;
                foreach ($this->resources as $item1) {
                    $res['Resources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetProperties) {
            if (\is_array($this->targetProperties)) {
                $res['TargetProperties'] = [];
                $n1 = 0;
                foreach ($this->targetProperties as $item1) {
                    $res['TargetProperties'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targets) {
            if (\is_array($this->targets)) {
                $res['Targets'] = [];
                $n1 = 0;
                foreach ($this->targets as $item1) {
                    $res['Targets'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PermissionNames'])) {
            if (!empty($map['PermissionNames'])) {
                $model->permissionNames = [];
                $n1 = 0;
                foreach ($map['PermissionNames'] as $item1) {
                    $model->permissionNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceArns'])) {
            if (!empty($map['ResourceArns'])) {
                $model->resourceArns = [];
                $n1 = 0;
                foreach ($map['ResourceArns'] as $item1) {
                    $model->resourceArns[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceShareId'])) {
            $model->resourceShareId = $map['ResourceShareId'];
        }

        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n1 = 0;
                foreach ($map['Resources'] as $item1) {
                    $model->resources[$n1] = resources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TargetProperties'])) {
            if (!empty($map['TargetProperties'])) {
                $model->targetProperties = [];
                $n1 = 0;
                foreach ($map['TargetProperties'] as $item1) {
                    $model->targetProperties[$n1] = targetProperties::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n1 = 0;
                foreach ($map['Targets'] as $item1) {
                    $model->targets[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
