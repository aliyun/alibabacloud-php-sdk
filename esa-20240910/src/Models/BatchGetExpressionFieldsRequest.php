<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchGetExpressionFieldsRequest\expressions;

class BatchGetExpressionFieldsRequest extends Model
{
    /**
     * @var expressions[]
     */
    public $expressions;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $planNameEn;

    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'expressions' => 'Expressions',
        'instanceId' => 'InstanceId',
        'kind' => 'Kind',
        'phase' => 'Phase',
        'planNameEn' => 'PlanNameEn',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
        if (\is_array($this->expressions)) {
            Model::validateArray($this->expressions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expressions) {
            if (\is_array($this->expressions)) {
                $res['Expressions'] = [];
                $n1 = 0;
                foreach ($this->expressions as $item1) {
                    $res['Expressions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }

        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }

        if (null !== $this->planNameEn) {
            $res['PlanNameEn'] = $this->planNameEn;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['Expressions'])) {
            if (!empty($map['Expressions'])) {
                $model->expressions = [];
                $n1 = 0;
                foreach ($map['Expressions'] as $item1) {
                    $model->expressions[$n1] = expressions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }

        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }

        if (isset($map['PlanNameEn'])) {
            $model->planNameEn = $map['PlanNameEn'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
