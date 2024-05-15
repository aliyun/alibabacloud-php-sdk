<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceInfoResponseBody\conferenceList;
use AlibabaCloud\Tea\Model;

class QueryScheduleConferenceInfoResponseBody extends Model
{
    /**
     * @var conferenceList[]
     */
    public $conferenceList;

    /**
     * @example 19
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 20
     *
     * @var int
     */
    public $totalCount;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $vendorRequestId;

    /**
     * @example dingtalk
     *
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'conferenceList'  => 'conferenceList',
        'nextToken'       => 'nextToken',
        'requestId'       => 'requestId',
        'totalCount'      => 'totalCount',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType'      => 'vendorType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conferenceList) {
            $res['conferenceList'] = [];
            if (null !== $this->conferenceList && \is_array($this->conferenceList)) {
                $n = 0;
                foreach ($this->conferenceList as $item) {
                    $res['conferenceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

    /**
     * @param array $map
     *
     * @return QueryScheduleConferenceInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['conferenceList'])) {
            if (!empty($map['conferenceList'])) {
                $model->conferenceList = [];
                $n                     = 0;
                foreach ($map['conferenceList'] as $item) {
                    $model->conferenceList[$n++] = null !== $item ? conferenceList::fromMap($item) : $item;
                }
            }
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
