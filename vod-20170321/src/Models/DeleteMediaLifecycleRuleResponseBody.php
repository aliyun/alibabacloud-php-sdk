<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DeleteMediaLifecycleRuleResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $forbiddenRuleIds;

    /**
     * @var string[]
     */
    public $nonExistRuleIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'forbiddenRuleIds' => 'ForbiddenRuleIds',
        'nonExistRuleIds' => 'NonExistRuleIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->forbiddenRuleIds)) {
            Model::validateArray($this->forbiddenRuleIds);
        }
        if (\is_array($this->nonExistRuleIds)) {
            Model::validateArray($this->nonExistRuleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forbiddenRuleIds) {
            if (\is_array($this->forbiddenRuleIds)) {
                $res['ForbiddenRuleIds'] = [];
                $n1 = 0;
                foreach ($this->forbiddenRuleIds as $item1) {
                    $res['ForbiddenRuleIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nonExistRuleIds) {
            if (\is_array($this->nonExistRuleIds)) {
                $res['NonExistRuleIds'] = [];
                $n1 = 0;
                foreach ($this->nonExistRuleIds as $item1) {
                    $res['NonExistRuleIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ForbiddenRuleIds'])) {
            if (!empty($map['ForbiddenRuleIds'])) {
                $model->forbiddenRuleIds = [];
                $n1 = 0;
                foreach ($map['ForbiddenRuleIds'] as $item1) {
                    $model->forbiddenRuleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NonExistRuleIds'])) {
            if (!empty($map['NonExistRuleIds'])) {
                $model->nonExistRuleIds = [];
                $n1 = 0;
                foreach ($map['NonExistRuleIds'] as $item1) {
                    $model->nonExistRuleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
