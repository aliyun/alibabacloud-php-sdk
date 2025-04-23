<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class GetRunningJobsRequest extends Model
{
    /**
     * @var int
     */
    public $from;

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

    /**
     * @var int
     */
    public $to;
    protected $_name = [
        'from' => 'from',
        'jobOwnerList' => 'jobOwnerList',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'quotaNicknameList' => 'quotaNicknameList',
        'to' => 'to',
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
        if (null !== $this->from) {
            $res['from'] = $this->from;
        }

        if (null !== $this->jobOwnerList) {
            if (\is_array($this->jobOwnerList)) {
                $res['jobOwnerList'] = [];
                $n1 = 0;
                foreach ($this->jobOwnerList as $item1) {
                    $res['jobOwnerList'][$n1++] = $item1;
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
                    $res['quotaNicknameList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->to) {
            $res['to'] = $this->to;
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
        if (isset($map['from'])) {
            $model->from = $map['from'];
        }

        if (isset($map['jobOwnerList'])) {
            if (!empty($map['jobOwnerList'])) {
                $model->jobOwnerList = [];
                $n1 = 0;
                foreach ($map['jobOwnerList'] as $item1) {
                    $model->jobOwnerList[$n1++] = $item1;
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
                    $model->quotaNicknameList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['to'])) {
            $model->to = $map['to'];
        }

        return $model;
    }
}
