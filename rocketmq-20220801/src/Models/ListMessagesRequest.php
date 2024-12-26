<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class ListMessagesRequest extends Model
{
    /**
     * @description The end of the time range to query.
     *
     * @example 2024-09-09 09:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Message Id.
     *
     * @example 7F00000100207A4F0F294A938F7807AE
     *
     * @var string
     */
    public $messageId;

    /**
     * @description Message key.
     *
     * @example XSCBillResult
     *
     * @var string
     */
    public $messageKey;

    /**
     * @description The page number. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The scroll ID of the request.
     *
     * You do not need to configure this parameter for the first page. This parameter is included in the pagination request based on the result returned for the first page.
     * @example B13D0B07-F24B-4790-88D8-D47A38063D00
     *
     * @var string
     */
    public $scrollId;

    /**
     * @description The beginning of the time range to query.
     *
     * @example 2024-09-09 08:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'    => 'endTime',
        'messageId'  => 'messageId',
        'messageKey' => 'messageKey',
        'pageNumber' => 'pageNumber',
        'pageSize'   => 'pageSize',
        'scrollId'   => 'scrollId',
        'startTime'  => 'startTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }
        if (null !== $this->messageKey) {
            $res['messageKey'] = $this->messageKey;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->scrollId) {
            $res['scrollId'] = $this->scrollId;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMessagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }
        if (isset($map['messageKey'])) {
            $model->messageKey = $map['messageKey'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['scrollId'])) {
            $model->scrollId = $map['scrollId'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
