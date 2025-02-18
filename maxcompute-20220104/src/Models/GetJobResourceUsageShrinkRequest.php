<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class GetJobResourceUsageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $date;
    /**
     * @var string
     */
    public $jobOwnerListShrink;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $quotaNicknameListShrink;
    protected $_name = [
        'date'                    => 'date',
        'jobOwnerListShrink'      => 'jobOwnerList',
        'pageNumber'              => 'pageNumber',
        'pageSize'                => 'pageSize',
        'quotaNicknameListShrink' => 'quotaNicknameList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }

        if (null !== $this->jobOwnerListShrink) {
            $res['jobOwnerList'] = $this->jobOwnerListShrink;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->quotaNicknameListShrink) {
            $res['quotaNicknameList'] = $this->quotaNicknameListShrink;
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
            $model->jobOwnerListShrink = $map['jobOwnerList'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['quotaNicknameList'])) {
            $model->quotaNicknameListShrink = $map['quotaNicknameList'];
        }

        return $model;
    }
}
