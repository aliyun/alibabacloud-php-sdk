<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansInstanceRequest\tag;
use AlibabaCloud\Tea\Model;

class QuerySavingsPlansInstanceRequest extends Model
{
    /**
     * @description The end of the time range to query. Specify the time in the format of yyyy-MM-dd HH:mm:ss.
     *
     * @example 2021-01-01 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the savings plan instance.
     *
     * @example spn-xxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The language of the return data. Valid values:
     *
     *   ZH: Chinese
     *   EN: English
     *
     * @example ZH
     *
     * @var string
     */
    public $locale;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The beginning of the time range to query. Specify the time in the format of yyyy-MM-dd HH:mm:ss.
     *
     * @example 2020-01-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the Instance.
     *
     *  NORMAL
     * RELEASE
     *
     * @example NORMAL
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'endTime'    => 'EndTime',
        'instanceId' => 'InstanceId',
        'locale'     => 'Locale',
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
        'startTime'  => 'StartTime',
        'status'     => 'Status',
        'tag'        => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySavingsPlansInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
