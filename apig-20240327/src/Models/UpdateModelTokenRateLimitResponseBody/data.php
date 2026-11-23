<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateModelTokenRateLimitResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateModelTokenRateLimitResponseBody\data\consumers;

class data extends Model
{
    /**
     * @var int
     */
    public $appliedRevision;

    /**
     * @var string[]
     */
    public $consumerRuleIds;

    /**
     * @var consumers[]
     */
    public $consumers;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $globalRuleId;

    /**
     * @var int
     */
    public $globalTpm;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var int
     */
    public $revision;
    protected $_name = [
        'appliedRevision' => 'appliedRevision',
        'consumerRuleIds' => 'consumerRuleIds',
        'consumers' => 'consumers',
        'gatewayId' => 'gatewayId',
        'globalRuleId' => 'globalRuleId',
        'globalTpm' => 'globalTpm',
        'modelId' => 'modelId',
        'revision' => 'revision',
    ];

    public function validate()
    {
        if (\is_array($this->consumerRuleIds)) {
            Model::validateArray($this->consumerRuleIds);
        }
        if (\is_array($this->consumers)) {
            Model::validateArray($this->consumers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appliedRevision) {
            $res['appliedRevision'] = $this->appliedRevision;
        }

        if (null !== $this->consumerRuleIds) {
            if (\is_array($this->consumerRuleIds)) {
                $res['consumerRuleIds'] = [];
                foreach ($this->consumerRuleIds as $key1 => $value1) {
                    $res['consumerRuleIds'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->consumers) {
            if (\is_array($this->consumers)) {
                $res['consumers'] = [];
                $n1 = 0;
                foreach ($this->consumers as $item1) {
                    $res['consumers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->globalRuleId) {
            $res['globalRuleId'] = $this->globalRuleId;
        }

        if (null !== $this->globalTpm) {
            $res['globalTpm'] = $this->globalTpm;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->revision) {
            $res['revision'] = $this->revision;
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
        if (isset($map['appliedRevision'])) {
            $model->appliedRevision = $map['appliedRevision'];
        }

        if (isset($map['consumerRuleIds'])) {
            if (!empty($map['consumerRuleIds'])) {
                $model->consumerRuleIds = [];
                foreach ($map['consumerRuleIds'] as $key1 => $value1) {
                    $model->consumerRuleIds[$key1] = $value1;
                }
            }
        }

        if (isset($map['consumers'])) {
            if (!empty($map['consumers'])) {
                $model->consumers = [];
                $n1 = 0;
                foreach ($map['consumers'] as $item1) {
                    $model->consumers[$n1] = consumers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['globalRuleId'])) {
            $model->globalRuleId = $map['globalRuleId'];
        }

        if (isset($map['globalTpm'])) {
            $model->globalTpm = $map['globalTpm'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['revision'])) {
            $model->revision = $map['revision'];
        }

        return $model;
    }
}
