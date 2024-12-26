<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class ListTracesRequest extends Model
{
    /**
     * @description The end of the time range to query.
     *
     * This parameter is required.
     * @example 2023-05-19 10:10:09
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The message ID.
     *
     * This parameter is required if you set queryType to MESSAGE_ID.
     * @example 0100163E0EC1F1965C04C7906700000000
     *
     * @var string
     */
    public $messageId;

    /**
     * @description The message key.
     *
     * This parameter is required if you set queryType to MESSAGE_ID.
     * @example order_ceating
     *
     * @var string
     */
    public $messageKey;

    /**
     * @description The page number.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The query type.
     *
     * Valid values:
     *
     *   MESSAGE_ID
     *   MESSAGE_KEY
     *   TOPIC
     *
     * This parameter is required.
     * @example MESSAGE_ID
     *
     * @var string
     */
    public $queryType;

    /**
     * @description The beginning of the time range to query.
     *
     * This parameter is required.
     * @example 2023-05-10 10:42:11
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
        'queryType'  => 'queryType',
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
        if (null !== $this->queryType) {
            $res['queryType'] = $this->queryType;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTracesRequest
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
        if (isset($map['queryType'])) {
            $model->queryType = $map['queryType'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
