<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class GetJobResourceUsageRequest extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var string[]
     */
    public $jobOwnerList;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $quotaNicknameList;
    protected $_name = [
        'date' => 'date',
        'jobOwnerList' => 'jobOwnerList',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'quotaNicknameList' => 'quotaNicknameList',
    ];

    public function validate()
    {
        if (\is_array($this->jobOwnerList)) {
            Model::validateArray($this->jobOwnerList);
        }
        if (\is_array($this->quotaNicknameList)) {
            Model::validateArray($this->quotaNicknameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }

        if (null !== $this->jobOwnerList) {
            if (\is_array($this->jobOwnerList)) {
                $res['jobOwnerList'] = [];
                $n1 = 0;
                foreach ($this->jobOwnerList as $item1) {
                    $res['jobOwnerList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->quotaNicknameList) {
            if (\is_array($this->quotaNicknameList)) {
                $res['quotaNicknameList'] = [];
                $n1 = 0;
                foreach ($this->quotaNicknameList as $item1) {
                    $res['quotaNicknameList'][$n1] = $item1;
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
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }

        if (isset($map['jobOwnerList'])) {
            if (!empty($map['jobOwnerList'])) {
                $model->jobOwnerList = [];
                $n1 = 0;
                foreach ($map['jobOwnerList'] as $item1) {
                    $model->jobOwnerList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['quotaNicknameList'])) {
            if (!empty($map['quotaNicknameList'])) {
                $model->quotaNicknameList = [];
                $n1 = 0;
                foreach ($map['quotaNicknameList'] as $item1) {
                    $model->quotaNicknameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
