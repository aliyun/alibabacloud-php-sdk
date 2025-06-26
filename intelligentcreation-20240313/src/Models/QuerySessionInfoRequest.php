<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class QuerySessionInfoRequest extends Model
{
    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string[]
     */
    public $statusList;
    protected $_name = [
        'pageNo' => 'pageNo',
        'pageSize' => 'pageSize',
        'projectId' => 'projectId',
        'statusList' => 'statusList',
    ];

    public function validate()
    {
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['pageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        if (null !== $this->statusList) {
            if (\is_array($this->statusList)) {
                $res['statusList'] = [];
                $n1 = 0;
                foreach ($this->statusList as $item1) {
                    $res['statusList'][$n1] = $item1;
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
        if (isset($map['pageNo'])) {
            $model->pageNo = $map['pageNo'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        if (isset($map['statusList'])) {
            if (!empty($map['statusList'])) {
                $model->statusList = [];
                $n1 = 0;
                foreach ($map['statusList'] as $item1) {
                    $model->statusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
