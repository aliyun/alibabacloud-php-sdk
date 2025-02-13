<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoByRoomCodeResponseBody\conferenceList;

class QueryConferenceInfoByRoomCodeResponseBody extends Model
{
    /**
     * @var conferenceList[]
     */
    public $conferenceList;
    /**
     * @var string
     */
    public $dingtalkRequestId;
    /**
     * @var bool
     */
    public $hasMore;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    /**
     * @var string
     */
    public $vendorRequestId;
    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'conferenceList'    => 'conferenceList',
        'dingtalkRequestId' => 'dingtalkRequestId',
        'hasMore'           => 'hasMore',
        'nextToken'         => 'nextToken',
        'requestId'         => 'requestId',
        'totalCount'        => 'totalCount',
        'vendorRequestId'   => 'vendorRequestId',
        'vendorType'        => 'vendorType',
    ];

    public function validate()
    {
        if (\is_array($this->conferenceList)) {
            Model::validateArray($this->conferenceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conferenceList) {
            if (\is_array($this->conferenceList)) {
                $res['conferenceList'] = [];
                $n1                    = 0;
                foreach ($this->conferenceList as $item1) {
                    $res['conferenceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->dingtalkRequestId) {
            $res['dingtalkRequestId'] = $this->dingtalkRequestId;
        }

        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
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
        if (isset($map['conferenceList'])) {
            if (!empty($map['conferenceList'])) {
                $model->conferenceList = [];
                $n1                    = 0;
                foreach ($map['conferenceList'] as $item1) {
                    $model->conferenceList[$n1++] = conferenceList::fromMap($item1);
                }
            }
        }

        if (isset($map['dingtalkRequestId'])) {
            $model->dingtalkRequestId = $map['dingtalkRequestId'];
        }

        if (isset($map['hasMore'])) {
            $model->hasMore = $map['hasMore'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
