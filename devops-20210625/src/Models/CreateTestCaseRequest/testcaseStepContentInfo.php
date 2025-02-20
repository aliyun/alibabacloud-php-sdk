<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseRequest\testcaseStepContentInfo\stepResultList;

class testcaseStepContentInfo extends Model
{
    /**
     * @var string
     */
    public $precondition;
    /**
     * @var stepResultList[]
     */
    public $stepResultList;
    /**
     * @var string
     */
    public $stepType;
    protected $_name = [
        'precondition'   => 'precondition',
        'stepResultList' => 'stepResultList',
        'stepType'       => 'stepType',
    ];

    public function validate()
    {
        if (\is_array($this->stepResultList)) {
            Model::validateArray($this->stepResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->precondition) {
            $res['precondition'] = $this->precondition;
        }

        if (null !== $this->stepResultList) {
            if (\is_array($this->stepResultList)) {
                $res['stepResultList'] = [];
                $n1                    = 0;
                foreach ($this->stepResultList as $item1) {
                    $res['stepResultList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->stepType) {
            $res['stepType'] = $this->stepType;
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
        if (isset($map['precondition'])) {
            $model->precondition = $map['precondition'];
        }

        if (isset($map['stepResultList'])) {
            if (!empty($map['stepResultList'])) {
                $model->stepResultList = [];
                $n1                    = 0;
                foreach ($map['stepResultList'] as $item1) {
                    $model->stepResultList[$n1++] = stepResultList::fromMap($item1);
                }
            }
        }

        if (isset($map['stepType'])) {
            $model->stepType = $map['stepType'];
        }

        return $model;
    }
}
