<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListAvatarTrainingJobsRequest extends Model
{
    /**
     * @description *   The page number.
     *   Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description *   The number of entries per page.
     *   Default value: 10.
     *   Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description *   The job state.
     *   Valid values: Init, Queuing, Training, Success, and Fail.
     *
     * @example Success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'pageNo'   => 'PageNo',
        'pageSize' => 'PageSize',
        'status'   => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAvatarTrainingJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
