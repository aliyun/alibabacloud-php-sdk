<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class RateLimitRule extends Model
{
    /**
     * @var string
     */
    public $createdAt;

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
     * @var string
     */
    public $lastUpdatedAt;

    /**
     * @var string
     */
    public $rateLimitRuleId;

    /**
     * @var WindowLimit[]
     */
    public $windows;
    protected $_name = [
        'createdAt' => 'createdAt',
        'descriptorId' => 'descriptorId',
        'descriptorType' => 'descriptorType',
        'enabled' => 'enabled',
        'lastUpdatedAt' => 'lastUpdatedAt',
        'rateLimitRuleId' => 'rateLimitRuleId',
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
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->descriptorId) {
            $res['descriptorId'] = $this->descriptorId;
        }

        if (null !== $this->descriptorType) {
            $res['descriptorType'] = $this->descriptorType;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->lastUpdatedAt) {
            $res['lastUpdatedAt'] = $this->lastUpdatedAt;
        }

        if (null !== $this->rateLimitRuleId) {
            $res['rateLimitRuleId'] = $this->rateLimitRuleId;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['descriptorId'])) {
            $model->descriptorId = $map['descriptorId'];
        }

        if (isset($map['descriptorType'])) {
            $model->descriptorType = $map['descriptorType'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['lastUpdatedAt'])) {
            $model->lastUpdatedAt = $map['lastUpdatedAt'];
        }

        if (isset($map['rateLimitRuleId'])) {
            $model->rateLimitRuleId = $map['rateLimitRuleId'];
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
