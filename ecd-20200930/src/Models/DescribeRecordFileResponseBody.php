<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRecordFileResponseBody\recordFiles;

class DescribeRecordFileResponseBody extends Model
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
    public $totalCount;
    protected $_name = [
        'recordFiles' => 'RecordFiles',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
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
                $n1 = 0;
                foreach ($this->recordFiles as $item1) {
                    $res['RecordFiles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
                $n1 = 0;
                foreach ($map['RecordFiles'] as $item1) {
                    $model->recordFiles[$n1] = recordFiles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
