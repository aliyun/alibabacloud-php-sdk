<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCustomBlockRecordsResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCustomBlockRecordsResponseBody\recordList;

class DescribeCustomBlockRecordsResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var recordList[]
     */
    public $recordList;
    /**
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
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->recordList)) {
            Model::validateArray($this->recordList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->recordList) {
            if (\is_array($this->recordList)) {
                $res['RecordList'] = [];
                $n1                = 0;
                foreach ($this->recordList as $item1) {
                    $res['RecordList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RecordList'])) {
            if (!empty($map['RecordList'])) {
                $model->recordList = [];
                $n1                = 0;
                foreach ($map['RecordList'] as $item1) {
                    $model->recordList[$n1++] = recordList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
