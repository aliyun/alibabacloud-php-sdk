<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpImportResultResponseBody\fpResultLogInfoList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpImportResultResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class QueryFpImportResultResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var fpResultLogInfoList
     */
    public $fpResultLogInfoList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $logCount;
    protected $_name = [
        'pageInfo'            => 'PageInfo',
        'fpResultLogInfoList' => 'FpResultLogInfoList',
        'requestId'           => 'RequestId',
        'logCount'            => 'LogCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->fpResultLogInfoList) {
            $res['FpResultLogInfoList'] = null !== $this->fpResultLogInfoList ? $this->fpResultLogInfoList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->logCount) {
            $res['LogCount'] = $this->logCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryFpImportResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['FpResultLogInfoList'])) {
            $model->fpResultLogInfoList = fpResultLogInfoList::fromMap($map['FpResultLogInfoList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LogCount'])) {
            $model->logCount = $map['LogCount'];
        }

        return $model;
    }
}
