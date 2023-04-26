<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribePlayTopVideosRequest extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 2016-06-29T13:00:00Z
     *
     * @var string
     */
    public $bizDate;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The operation that you want to perform. Set the value to **DescribePlayTopVideos**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The time to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'bizDate'  => 'BizDate',
        'ownerId'  => 'OwnerId',
        'pageNo'   => 'PageNo',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlayTopVideosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
