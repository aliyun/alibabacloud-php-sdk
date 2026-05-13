<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationShrinkRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationShrinkRequest\resourcePoolOptions\privatePoolTags;

class resourcePoolOptions extends Model
{
    /**
     * @var string[]
     */
    public $privatePoolIds;

    /**
     * @var privatePoolTags[]
     */
    public $privatePoolTags;

    /**
     * @var string
     */
    public $strategy;
    protected $_name = [
        'privatePoolIds' => 'PrivatePoolIds',
        'privatePoolTags' => 'PrivatePoolTags',
        'strategy' => 'Strategy',
    ];

    public function validate()
    {
        if (\is_array($this->privatePoolIds)) {
            Model::validateArray($this->privatePoolIds);
        }
        if (\is_array($this->privatePoolTags)) {
            Model::validateArray($this->privatePoolTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privatePoolIds) {
            if (\is_array($this->privatePoolIds)) {
                $res['PrivatePoolIds'] = [];
                $n1 = 0;
                foreach ($this->privatePoolIds as $item1) {
                    $res['PrivatePoolIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->privatePoolTags) {
            if (\is_array($this->privatePoolTags)) {
                $res['PrivatePoolTags'] = [];
                $n1 = 0;
                foreach ($this->privatePoolTags as $item1) {
                    $res['PrivatePoolTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
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
        if (isset($map['PrivatePoolIds'])) {
            if (!empty($map['PrivatePoolIds'])) {
                $model->privatePoolIds = [];
                $n1 = 0;
                foreach ($map['PrivatePoolIds'] as $item1) {
                    $model->privatePoolIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PrivatePoolTags'])) {
            if (!empty($map['PrivatePoolTags'])) {
                $model->privatePoolTags = [];
                $n1 = 0;
                foreach ($map['PrivatePoolTags'] as $item1) {
                    $model->privatePoolTags[$n1] = privatePoolTags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }

        return $model;
    }
}
