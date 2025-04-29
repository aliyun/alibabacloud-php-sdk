<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class CarApplyQueryRequest extends Model
{
    /**
     * @var string
     */
    public $createdEndAt;

    /**
     * @var string
     */
    public $createdStartAt;

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
    public $thirdPartApplyId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'createdEndAt' => 'created_end_at',
        'createdStartAt' => 'created_start_at',
        'pageNumber' => 'page_number',
        'pageSize' => 'page_size',
        'thirdPartApplyId' => 'third_part_apply_id',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdEndAt) {
            $res['created_end_at'] = $this->createdEndAt;
        }

        if (null !== $this->createdStartAt) {
            $res['created_start_at'] = $this->createdStartAt;
        }

        if (null !== $this->pageNumber) {
            $res['page_number'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }

        if (null !== $this->thirdPartApplyId) {
            $res['third_part_apply_id'] = $this->thirdPartApplyId;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['created_end_at'])) {
            $model->createdEndAt = $map['created_end_at'];
        }

        if (isset($map['created_start_at'])) {
            $model->createdStartAt = $map['created_start_at'];
        }

        if (isset($map['page_number'])) {
            $model->pageNumber = $map['page_number'];
        }

        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }

        if (isset($map['third_part_apply_id'])) {
            $model->thirdPartApplyId = $map['third_part_apply_id'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
