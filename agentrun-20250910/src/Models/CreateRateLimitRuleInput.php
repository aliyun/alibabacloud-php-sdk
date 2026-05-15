<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CreateRateLimitRuleInput extends Model
{
    /**
     * @var string
     */
    public $descriptorId;

    /**
     * @var string
     */
    public $descriptorType;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var WindowLimit[]
     */
    public $windows;
    protected $_name = [
        'descriptorId' => 'descriptorId',
        'descriptorType' => 'descriptorType',
        'enabled' => 'enabled',
        'windows' => 'windows',
    ];

    public function validate()
    {
        if (\is_array($this->windows)) {
            Model::validateArray($this->windows);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->descriptorId) {
            $res['descriptorId'] = $this->descriptorId;
        }

        if (null !== $this->descriptorType) {
            $res['descriptorType'] = $this->descriptorType;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->windows) {
            if (\is_array($this->windows)) {
                $res['windows'] = [];
                $n1 = 0;
                foreach ($this->windows as $item1) {
                    $res['windows'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['descriptorId'])) {
            $model->descriptorId = $map['descriptorId'];
        }

        if (isset($map['descriptorType'])) {
            $model->descriptorType = $map['descriptorType'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['windows'])) {
            if (!empty($map['windows'])) {
                $model->windows = [];
                $n1 = 0;
                foreach ($map['windows'] as $item1) {
                    $model->windows[$n1] = WindowLimit::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
