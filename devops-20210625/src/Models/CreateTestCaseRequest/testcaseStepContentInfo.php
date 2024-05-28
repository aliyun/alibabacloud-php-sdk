<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseRequest;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseRequest\testcaseStepContentInfo\stepResultList;
use AlibabaCloud\Tea\Model;

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
     * @description This parameter is required.
     *
     * @example TEXT
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->precondition) {
            $res['precondition'] = $this->precondition;
        }
        if (null !== $this->stepResultList) {
            $res['stepResultList'] = [];
            if (null !== $this->stepResultList && \is_array($this->stepResultList)) {
                $n = 0;
                foreach ($this->stepResultList as $item) {
                    $res['stepResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->stepType) {
            $res['stepType'] = $this->stepType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return testcaseStepContentInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['precondition'])) {
            $model->precondition = $map['precondition'];
        }
        if (isset($map['stepResultList'])) {
            if (!empty($map['stepResultList'])) {
                $model->stepResultList = [];
                $n                     = 0;
                foreach ($map['stepResultList'] as $item) {
                    $model->stepResultList[$n++] = null !== $item ? stepResultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['stepType'])) {
            $model->stepType = $map['stepType'];
        }

        return $model;
    }
}
