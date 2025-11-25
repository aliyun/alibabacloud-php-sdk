<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\traceMapDo\subList;

class traceMapDo extends Model
{
    /**
     * @var string
     */
    public $bornHost;

    /**
     * @var int
     */
    public $costTime;

    /**
     * @var string
     */
    public $msgId;

    /**
     * @var string
     */
    public $msgKey;

    /**
     * @var string
     */
    public $pubGroupName;

    /**
     * @var int
     */
    public $pubTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var subList
     */
    public $subList;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'bornHost' => 'BornHost',
        'costTime' => 'CostTime',
        'msgId' => 'MsgId',
        'msgKey' => 'MsgKey',
        'pubGroupName' => 'PubGroupName',
        'pubTime' => 'PubTime',
        'status' => 'Status',
        'subList' => 'SubList',
        'tag' => 'Tag',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        if (null !== $this->subList) {
            $this->subList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['SubList'] = null !== $this->subList ? $this->subList->toArray($noStream) : $this->subList;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
