<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ListLiveMessageAppsRequest extends Model
{
    /**
     * @description The data center. It must be the same as the data center that was specified when you called the [CreateLiveMessageApp](https://help.aliyun.com/document_detail/2848162.html) operation to create the interactive messaging application. Valid values: cn-shanghai and ap-southeast-1 (Singapore).
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description The starting page number for the query. If you leave this parameter empty or set this parameter to -1, the query starts from the first page.
     *
     * @example -1
     *
     * @var int
     */
    public $nextPageToken;

    /**
     * @description The sort order based on the creation time. Valid values:
     *
     *   1: ascending order
     *   2: descending order
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $sortType;
    protected $_name = [
        'dataCenter' => 'DataCenter',
        'nextPageToken' => 'NextPageToken',
        'sortType' => 'SortType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLiveMessageAppsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }

        return $model;
    }
}
