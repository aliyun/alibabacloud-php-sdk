<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\ListProtectionPoliciesResponseBody\data\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BDRC\V20230808\Models\ListProtectionPoliciesResponseBody\data\content\latestApplySummary\applyStatusCount;
use AlibabaCloud\SDK\BDRC\V20230808\Models\ListProtectionPoliciesResponseBody\data\content\latestApplySummary\resourceCount;

class latestApplySummary extends Model
{
    /**
     * @var applyStatusCount[]
     */
    public $applyStatusCount;

    /**
     * @var int
     */
    public $completeTime;

    /**
     * @var resourceCount[]
     */
    public $resourceCount;
    protected $_name = [
        'applyStatusCount' => 'ApplyStatusCount',
        'completeTime' => 'CompleteTime',
        'resourceCount' => 'ResourceCount',
    ];

    public function validate()
    {
        if (\is_array($this->applyStatusCount)) {
            Model::validateArray($this->applyStatusCount);
        }
        if (\is_array($this->resourceCount)) {
            Model::validateArray($this->resourceCount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyStatusCount) {
            if (\is_array($this->applyStatusCount)) {
                $res['ApplyStatusCount'] = [];
                $n1 = 0;
                foreach ($this->applyStatusCount as $item1) {
                    $res['ApplyStatusCount'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }

        if (null !== $this->resourceCount) {
            if (\is_array($this->resourceCount)) {
                $res['ResourceCount'] = [];
                $n1 = 0;
                foreach ($this->resourceCount as $item1) {
                    $res['ResourceCount'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApplyStatusCount'])) {
            if (!empty($map['ApplyStatusCount'])) {
                $model->applyStatusCount = [];
                $n1 = 0;
                foreach ($map['ApplyStatusCount'] as $item1) {
                    $model->applyStatusCount[$n1] = applyStatusCount::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }

        if (isset($map['ResourceCount'])) {
            if (!empty($map['ResourceCount'])) {
                $model->resourceCount = [];
                $n1 = 0;
                foreach ($map['ResourceCount'] as $item1) {
                    $model->resourceCount[$n1] = resourceCount::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
