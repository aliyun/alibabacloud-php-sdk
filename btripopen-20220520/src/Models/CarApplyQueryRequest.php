<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class CarApplyQueryRequest extends Model
{
    /**
     * @example 2021-03-18 20:26:56
     *
     * @var string
     */
    public $createdEndAt;

    /**
     * @example 2021-03-18 20:26:56
     *
     * @var string
     */
    public $createdStartAt;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example apply1
     *
     * @var string
     */
    public $thirdPartApplyId;

    /**
     * @example userid
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'createdEndAt'     => 'created_end_at',
        'createdStartAt'   => 'created_start_at',
        'pageNumber'       => 'page_number',
        'pageSize'         => 'page_size',
        'thirdPartApplyId' => 'third_part_apply_id',
        'userId'           => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CarApplyQueryRequest
     */
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
