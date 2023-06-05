<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListShiftSchedulesRequest extends Model
{
    /**
     * @description The number of entries to return on each page. Default value: 10. Maximum value: 100.
     *
     * @example 1933790683****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The ID of the request. You can use the ID to query logs and troubleshoot issues.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of the page to return. Minimum value:1. Maximum value: 100. Default value: 1.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of your Alibaba Cloud account. You can log on to the DataWorks console and move the pointer over the profile picture in the upper-right corner to obtain the ID.
     *
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
