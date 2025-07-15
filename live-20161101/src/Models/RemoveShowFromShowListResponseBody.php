<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class RemoveShowFromShowListResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the episode.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf93880e****
     *
     * @var string
     */
    public $showId;

    /**
     * @description The IDs of episodes that failed to be removed and the relevant failure information.
     *
     * @example failedList[Show1, Show2...]
     *
     * @var string
     */
    public $failedList;

    /**
     * @description The IDs of episodes that were removed.
     *
     * @example f1933f16-5467-4308-b3a9-e8d451a90999
     *
     * @var string
     */
    public $successfulShowIds;
    protected $_name = [
        'requestId' => 'RequestId',
        'showId' => 'ShowId',
        'failedList' => 'failedList',
        'successfulShowIds' => 'successfulShowIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->showId) {
            $res['ShowId'] = $this->showId;
        }
        if (null !== $this->failedList) {
            $res['failedList'] = $this->failedList;
        }
        if (null !== $this->successfulShowIds) {
            $res['successfulShowIds'] = $this->successfulShowIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveShowFromShowListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ShowId'])) {
            $model->showId = $map['ShowId'];
        }
        if (isset($map['failedList'])) {
            $model->failedList = $map['failedList'];
        }
        if (isset($map['successfulShowIds'])) {
            $model->successfulShowIds = $map['successfulShowIds'];
        }

        return $model;
    }
}
