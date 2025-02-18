<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class GetRunningJobsShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $from;
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
    /**
     * @var int
     */
    public $to;
    protected $_name = [
        'from'                    => 'from',
        'jobOwnerListShrink'      => 'jobOwnerList',
        'pageNumber'              => 'pageNumber',
        'pageSize'                => 'pageSize',
        'quotaNicknameListShrink' => 'quotaNicknameList',
        'to'                      => 'to',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->from) {
            $res['from'] = $this->from;
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

        if (isset($map['to'])) {
            $model->to = $map['to'];
        }

        return $model;
    }
}
