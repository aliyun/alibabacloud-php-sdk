<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\traceMapDo\subList;
use AlibabaCloud\Tea\Model;

class traceMapDo extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $msgKey;

    /**
     * @var int
     */
    public $pubTime;

    /**
     * @var subList
     */
    public $subList;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var int
     */
    public $costTime;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $msgId;

    /**
     * @var string
     */
    public $pubGroupName;

    /**
     * @var string
     */
    public $bornHost;
    protected $_name = [
        'status'       => 'Status',
        'msgKey'       => 'MsgKey',
        'pubTime'      => 'PubTime',
        'subList'      => 'SubList',
        'topic'        => 'Topic',
        'costTime'     => 'CostTime',
        'tag'          => 'Tag',
        'msgId'        => 'MsgId',
        'pubGroupName' => 'PubGroupName',
        'bornHost'     => 'BornHost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->msgKey) {
            $res['MsgKey'] = $this->msgKey;
        }
        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }
        if (null !== $this->subList) {
            $res['SubList'] = null !== $this->subList ? $this->subList->toMap() : null;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->costTime) {
            $res['CostTime'] = $this->costTime;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }
        if (null !== $this->pubGroupName) {
            $res['PubGroupName'] = $this->pubGroupName;
        }
        if (null !== $this->bornHost) {
            $res['BornHost'] = $this->bornHost;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['MsgKey'])) {
            $model->msgKey = $map['MsgKey'];
        }
        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }
        if (isset($map['SubList'])) {
            $model->subList = subList::fromMap($map['SubList']);
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }
        if (isset($map['PubGroupName'])) {
            $model->pubGroupName = $map['PubGroupName'];
        }
        if (isset($map['BornHost'])) {
            $model->bornHost = $map['BornHost'];
        }

        return $model;
    }
}
