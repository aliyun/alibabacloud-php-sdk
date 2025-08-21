<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DisableAutoResourceOptimizeRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DisableAutoResourceOptimizeRulesResponseBody\data\configFailInstanceList;
use AlibabaCloud\SDK\DAS\V20200116\Models\DisableAutoResourceOptimizeRulesResponseBody\data\configSuccessInstanceList;

class data extends Model
{
    /**
     * @var int
     */
    public $configFailInstanceCount;

    /**
     * @var configFailInstanceList[]
     */
    public $configFailInstanceList;

    /**
     * @var int
     */
    public $configSuccessInstanceCount;

    /**
     * @var configSuccessInstanceList[]
     */
    public $configSuccessInstanceList;

    /**
     * @var int
     */
    public $totalInstanceCount;
    protected $_name = [
        'configFailInstanceCount' => 'ConfigFailInstanceCount',
        'configFailInstanceList' => 'ConfigFailInstanceList',
        'configSuccessInstanceCount' => 'ConfigSuccessInstanceCount',
        'configSuccessInstanceList' => 'ConfigSuccessInstanceList',
        'totalInstanceCount' => 'TotalInstanceCount',
    ];

    public function validate()
    {
        if (\is_array($this->configFailInstanceList)) {
            Model::validateArray($this->configFailInstanceList);
        }
        if (\is_array($this->configSuccessInstanceList)) {
            Model::validateArray($this->configSuccessInstanceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configFailInstanceCount) {
            $res['ConfigFailInstanceCount'] = $this->configFailInstanceCount;
        }

        if (null !== $this->configFailInstanceList) {
            if (\is_array($this->configFailInstanceList)) {
                $res['ConfigFailInstanceList'] = [];
                $n1 = 0;
                foreach ($this->configFailInstanceList as $item1) {
                    $res['ConfigFailInstanceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->configSuccessInstanceCount) {
            $res['ConfigSuccessInstanceCount'] = $this->configSuccessInstanceCount;
        }

        if (null !== $this->configSuccessInstanceList) {
            if (\is_array($this->configSuccessInstanceList)) {
                $res['ConfigSuccessInstanceList'] = [];
                $n1 = 0;
                foreach ($this->configSuccessInstanceList as $item1) {
                    $res['ConfigSuccessInstanceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalInstanceCount) {
            $res['TotalInstanceCount'] = $this->totalInstanceCount;
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
        if (isset($map['ConfigFailInstanceCount'])) {
            $model->configFailInstanceCount = $map['ConfigFailInstanceCount'];
        }

        if (isset($map['ConfigFailInstanceList'])) {
            if (!empty($map['ConfigFailInstanceList'])) {
                $model->configFailInstanceList = [];
                $n1 = 0;
                foreach ($map['ConfigFailInstanceList'] as $item1) {
                    $model->configFailInstanceList[$n1] = configFailInstanceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ConfigSuccessInstanceCount'])) {
            $model->configSuccessInstanceCount = $map['ConfigSuccessInstanceCount'];
        }

        if (isset($map['ConfigSuccessInstanceList'])) {
            if (!empty($map['ConfigSuccessInstanceList'])) {
                $model->configSuccessInstanceList = [];
                $n1 = 0;
                foreach ($map['ConfigSuccessInstanceList'] as $item1) {
                    $model->configSuccessInstanceList[$n1] = configSuccessInstanceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalInstanceCount'])) {
            $model->totalInstanceCount = $map['TotalInstanceCount'];
        }

        return $model;
    }
}
