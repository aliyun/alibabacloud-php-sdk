<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class StatisticsListByTypeReportResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @example 12312131231
     *
     * @var int
     */
    public $nextCursor;

    /**
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $useridList;
    protected $_name = [
        'hasMore'    => 'hasMore',
        'nextCursor' => 'nextCursor',
        'requestId'  => 'requestId',
        'useridList' => 'useridList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }
        if (null !== $this->nextCursor) {
            $res['nextCursor'] = $this->nextCursor;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->useridList) {
            $res['useridList'] = $this->useridList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StatisticsListByTypeReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hasMore'])) {
            $model->hasMore = $map['hasMore'];
        }
        if (isset($map['nextCursor'])) {
            $model->nextCursor = $map['nextCursor'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['useridList'])) {
            if (!empty($map['useridList'])) {
                $model->useridList = $map['useridList'];
            }
        }

        return $model;
    }
}
