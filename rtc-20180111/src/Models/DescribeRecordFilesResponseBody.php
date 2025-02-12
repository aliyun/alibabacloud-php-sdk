<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordFilesResponseBody\recordFiles;

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
        if (\is_array($this->recordFiles)) {
            Model::validateArray($this->recordFiles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordFiles) {
            if (\is_array($this->recordFiles)) {
                $res['RecordFiles'] = [];
                $n1                 = 0;
                foreach ($this->recordFiles as $item1) {
                    $res['RecordFiles'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordFiles'])) {
            if (!empty($map['RecordFiles'])) {
                $model->recordFiles = [];
                $n1                 = 0;
                foreach ($map['RecordFiles'] as $item1) {
                    $model->recordFiles[$n1++] = recordFiles::fromMap($item1);
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
