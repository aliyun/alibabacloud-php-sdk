<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListNotificationHistoriesResponseBody\notificationHistories;
use AlibabaCloud\Tea\Model;

class ListNotificationHistoriesResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 10
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var notificationHistories[]
     */
    public $notificationHistories;

    /**
     * @description request Id
     *
     * @example AC8F05E6-AFBB-4AAE-B75E-A6539A9BAAA8
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults'            => 'MaxResults',
        'nextToken'             => 'NextToken',
        'notificationHistories' => 'NotificationHistories',
        'requestId'             => 'RequestId',
        'totalCount'            => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->notificationHistories) {
            $res['NotificationHistories'] = [];
            if (null !== $this->notificationHistories && \is_array($this->notificationHistories)) {
                $n = 0;
                foreach ($this->notificationHistories as $item) {
                    $res['NotificationHistories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNotificationHistoriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['NotificationHistories'])) {
            if (!empty($map['NotificationHistories'])) {
                $model->notificationHistories = [];
                $n                            = 0;
                foreach ($map['NotificationHistories'] as $item) {
                    $model->notificationHistories[$n++] = null !== $item ? notificationHistories::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
