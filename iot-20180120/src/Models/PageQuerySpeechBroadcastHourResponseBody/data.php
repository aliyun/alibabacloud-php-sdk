<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\PageQuerySpeechBroadcastHourResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\PageQuerySpeechBroadcastHourResponseBody\data\resultData;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageId;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * If **PageToken** is empty, no next page exists.
     * @example TGlzdFJlc291cm****
     *
     * @var string
     */
    public $pageToken;

    /**
     * @description The shared speech broadcasting data returned.
     *
     * @var resultData
     */
    public $resultData;

    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'pageId'     => 'PageId',
        'pageSize'   => 'PageSize',
        'pageToken'  => 'PageToken',
        'resultData' => 'ResultData',
        'total'      => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageToken) {
            $res['PageToken'] = $this->pageToken;
        }
        if (null !== $this->resultData) {
            $res['ResultData'] = null !== $this->resultData ? $this->resultData->toMap() : null;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageToken'])) {
            $model->pageToken = $map['PageToken'];
        }
        if (isset($map['ResultData'])) {
            $model->resultData = resultData::fromMap($map['ResultData']);
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
