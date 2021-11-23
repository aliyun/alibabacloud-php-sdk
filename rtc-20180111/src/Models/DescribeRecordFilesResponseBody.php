<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordFilesResponseBody\recordFiles;
use AlibabaCloud\Tea\Model;

class DescribeRecordFilesResponseBody extends Model
{
    /**
     * @var recordFiles[]
     */
    public $recordFiles;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalNum;

    /**
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'recordFiles' => 'RecordFiles',
        'requestId'   => 'RequestId',
        'totalNum'    => 'TotalNum',
        'totalPage'   => 'TotalPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordFiles) {
            $res['RecordFiles'] = [];
            if (null !== $this->recordFiles && \is_array($this->recordFiles)) {
                $n = 0;
                foreach ($this->recordFiles as $item) {
                    $res['RecordFiles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecordFilesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordFiles'])) {
            if (!empty($map['RecordFiles'])) {
                $model->recordFiles = [];
                $n                  = 0;
                foreach ($map['RecordFiles'] as $item) {
                    $model->recordFiles[$n++] = null !== $item ? recordFiles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
