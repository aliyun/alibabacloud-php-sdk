<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListShiftSchedulesRequest extends Model
{
    /**
     * @var string
     */
    public $owner;

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
    public $shiftScheduleName;
    protected $_name = [
        'owner'             => 'Owner',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'shiftScheduleName' => 'ShiftScheduleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->shiftScheduleName) {
            $res['ShiftScheduleName'] = $this->shiftScheduleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListShiftSchedulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ShiftScheduleName'])) {
            $model->shiftScheduleName = $map['ShiftScheduleName'];
        }

        return $model;
    }
}
