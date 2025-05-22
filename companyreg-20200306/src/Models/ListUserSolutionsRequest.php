<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Dara\Model;

class ListUserSolutionsRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int[]
     */
    public $existStatus;

    /**
     * @var string
     */
    public $intentionBizId;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'bizType' => 'BizType',
        'existStatus' => 'ExistStatus',
        'intentionBizId' => 'IntentionBizId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->existStatus)) {
            Model::validateArray($this->existStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->existStatus) {
            if (\is_array($this->existStatus)) {
                $res['ExistStatus'] = [];
                $n1 = 0;
                foreach ($this->existStatus as $item1) {
                    $res['ExistStatus'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->intentionBizId) {
            $res['IntentionBizId'] = $this->intentionBizId;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['ExistStatus'])) {
            if (!empty($map['ExistStatus'])) {
                $model->existStatus = [];
                $n1 = 0;
                foreach ($map['ExistStatus'] as $item1) {
                    $model->existStatus[$n1++] = $item1;
                }
            }
        }

        if (isset($map['IntentionBizId'])) {
            $model->intentionBizId = $map['IntentionBizId'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
