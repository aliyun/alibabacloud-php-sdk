<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCustomBlockRecordsResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCustomBlockRecordsResponseBody\recordList;
use AlibabaCloud\Tea\Model;

class DescribeCustomBlockRecordsResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description An array that consists of the defense rules.
     *
     * @var recordList[]
     */
    public $recordList;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 028CF634-5268-5660-9575-48C9ED6B7T8Y
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pageInfo'   => 'PageInfo',
        'recordList' => 'RecordList',
        'requestId'  => 'RequestId',
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
        if (null !== $this->recordList) {
            $res['RecordList'] = [];
            if (null !== $this->recordList && \is_array($this->recordList)) {
                $n = 0;
                foreach ($this->recordList as $item) {
                    $res['RecordList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomBlockRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RecordList'])) {
            if (!empty($map['RecordList'])) {
                $model->recordList = [];
                $n                 = 0;
                foreach ($map['RecordList'] as $item) {
                    $model->recordList[$n++] = null !== $item ? recordList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
