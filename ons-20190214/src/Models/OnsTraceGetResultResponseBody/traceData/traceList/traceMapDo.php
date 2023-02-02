<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\traceMapDo\subList;
use AlibabaCloud\Tea\Model;

class traceMapDo extends Model
{
    /**
     * @description The address of the producer that generated the message.
     *
     * @example 30.5.**.**
     *
     * @var string
     */
    public $bornHost;

    /**
     * @description The period of time that the system took to send the message. Unit: milliseconds.
     *
     * @example 24
     *
     * @var int
     */
    public $costTime;

    /**
     * @description The ID of the message.
     *
     * @example 0BC1F01800002A9F000000531246****
     *
     * @var string
     */
    public $msgId;

    /**
     * @description The key of the message.
     *
     * @example ORDERID_100
     *
     * @var string
     */
    public $msgKey;

    /**
     * @description The ID of the group that contains the producer.
     *
     * @example GID_test
     *
     * @var string
     */
    public $pubGroupName;

    /**
     * @description The point in time when the message was sent.
     *
     * @example 1570850870478
     *
     * @var int
     */
    public $pubTime;

    /**
     * @description Indicates whether the message is sent. Valid values:
     *
     *   **SEND_SUCCESS**: The message is sent.
     *   **SEND_FAILED**: The message failed to be sent.
     *   **SEND_ROLLBACK:** The message is a transactional message and is rolled back.
     *   **SEND_UNKNOWN:** The message is a transactional message and is not committed.
     *   **SEND_DELAY:** The message is a scheduled or delayed message and is waiting to be sent at the specified point in time.
     *
     * @example SEND_SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description The consumption traces of the message.
     *
     * @var subList
     */
    public $subList;

    /**
     * @description The tag of the message.
     *
     * @example TagA
     *
     * @var string
     */
    public $tag;

    /**
     * @description The topic in which the message is stored.
     *
     * @example test
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'bornHost'     => 'BornHost',
        'costTime'     => 'CostTime',
        'msgId'        => 'MsgId',
        'msgKey'       => 'MsgKey',
        'pubGroupName' => 'PubGroupName',
        'pubTime'      => 'PubTime',
        'status'       => 'Status',
        'subList'      => 'SubList',
        'tag'          => 'Tag',
        'topic'        => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bornHost) {
            $res['BornHost'] = $this->bornHost;
        }
        if (null !== $this->costTime) {
            $res['CostTime'] = $this->costTime;
        }
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }
        if (null !== $this->msgKey) {
            $res['MsgKey'] = $this->msgKey;
        }
        if (null !== $this->pubGroupName) {
            $res['PubGroupName'] = $this->pubGroupName;
        }
        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subList) {
            $res['SubList'] = null !== $this->subList ? $this->subList->toMap() : null;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return traceMapDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BornHost'])) {
            $model->bornHost = $map['BornHost'];
        }
        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }
        if (isset($map['MsgKey'])) {
            $model->msgKey = $map['MsgKey'];
        }
        if (isset($map['PubGroupName'])) {
            $model->pubGroupName = $map['PubGroupName'];
        }
        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubList'])) {
            $model->subList = subList::fromMap($map['SubList']);
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
