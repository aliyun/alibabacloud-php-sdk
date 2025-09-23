<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\DisassociateResourceShareRequest\resources;

class DisassociateResourceShareRequest extends Model
{
    /**
     * @var string[]
     */
    public $resourceArns;

    /**
     * @var string
     */
    public $resourceOwner;

    /**
     * @var string
     */
    public $resourceShareId;

    /**
     * @var resources[]
     */
    public $resources;

    /**
     * @var string[]
     */
    public $targets;
    protected $_name = [
        'resourceArns' => 'ResourceArns',
        'resourceOwner' => 'ResourceOwner',
        'resourceShareId' => 'ResourceShareId',
        'resources' => 'Resources',
        'targets' => 'Targets',
    ];

    public function validate()
    {
        if (\is_array($this->resourceArns)) {
            Model::validateArray($this->resourceArns);
        }
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        if (\is_array($this->targets)) {
            Model::validateArray($this->targets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->resourceOwner) {
            $res['ResourceOwner'] = $this->resourceOwner;
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

        if (isset($map['ResourceOwner'])) {
            $model->resourceOwner = $map['ResourceOwner'];
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
