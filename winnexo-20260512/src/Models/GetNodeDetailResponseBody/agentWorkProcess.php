<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetNodeDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetNodeDetailResponseBody\agentWorkProcess\artifacts;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetNodeDetailResponseBody\agentWorkProcess\replies;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetNodeDetailResponseBody\agentWorkProcess\skillCalls;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetNodeDetailResponseBody\agentWorkProcess\thoughts;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetNodeDetailResponseBody\agentWorkProcess\toolCalls;

class agentWorkProcess extends Model
{
    /**
     * @var artifacts[]
     */
    public $artifacts;

    /**
     * @var replies[]
     */
    public $replies;

    /**
     * @var skillCalls[]
     */
    public $skillCalls;

    /**
     * @var thoughts[]
     */
    public $thoughts;

    /**
     * @var toolCalls[]
     */
    public $toolCalls;
    protected $_name = [
        'artifacts' => 'artifacts',
        'replies' => 'replies',
        'skillCalls' => 'skillCalls',
        'thoughts' => 'thoughts',
        'toolCalls' => 'toolCalls',
    ];

    public function validate()
    {
        if (\is_array($this->artifacts)) {
            Model::validateArray($this->artifacts);
        }
        if (\is_array($this->replies)) {
            Model::validateArray($this->replies);
        }
        if (\is_array($this->skillCalls)) {
            Model::validateArray($this->skillCalls);
        }
        if (\is_array($this->thoughts)) {
            Model::validateArray($this->thoughts);
        }
        if (\is_array($this->toolCalls)) {
            Model::validateArray($this->toolCalls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifacts) {
            if (\is_array($this->artifacts)) {
                $res['artifacts'] = [];
                $n1 = 0;
                foreach ($this->artifacts as $item1) {
                    $res['artifacts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->replies) {
            if (\is_array($this->replies)) {
                $res['replies'] = [];
                $n1 = 0;
                foreach ($this->replies as $item1) {
                    $res['replies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skillCalls) {
            if (\is_array($this->skillCalls)) {
                $res['skillCalls'] = [];
                $n1 = 0;
                foreach ($this->skillCalls as $item1) {
                    $res['skillCalls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->thoughts) {
            if (\is_array($this->thoughts)) {
                $res['thoughts'] = [];
                $n1 = 0;
                foreach ($this->thoughts as $item1) {
                    $res['thoughts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->toolCalls) {
            if (\is_array($this->toolCalls)) {
                $res['toolCalls'] = [];
                $n1 = 0;
                foreach ($this->toolCalls as $item1) {
                    $res['toolCalls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['artifacts'])) {
            if (!empty($map['artifacts'])) {
                $model->artifacts = [];
                $n1 = 0;
                foreach ($map['artifacts'] as $item1) {
                    $model->artifacts[$n1] = artifacts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['replies'])) {
            if (!empty($map['replies'])) {
                $model->replies = [];
                $n1 = 0;
                foreach ($map['replies'] as $item1) {
                    $model->replies[$n1] = replies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['skillCalls'])) {
            if (!empty($map['skillCalls'])) {
                $model->skillCalls = [];
                $n1 = 0;
                foreach ($map['skillCalls'] as $item1) {
                    $model->skillCalls[$n1] = skillCalls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['thoughts'])) {
            if (!empty($map['thoughts'])) {
                $model->thoughts = [];
                $n1 = 0;
                foreach ($map['thoughts'] as $item1) {
                    $model->thoughts[$n1] = thoughts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['toolCalls'])) {
            if (!empty($map['toolCalls'])) {
                $model->toolCalls = [];
                $n1 = 0;
                foreach ($map['toolCalls'] as $item1) {
                    $model->toolCalls[$n1] = toolCalls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
