<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeWebLockInclusiveFileTypeResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $inclusiveFileType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'inclusiveFileType' => 'InclusiveFileType',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->inclusiveFileType)) {
            Model::validateArray($this->inclusiveFileType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inclusiveFileType) {
            if (\is_array($this->inclusiveFileType)) {
                $res['InclusiveFileType'] = [];
                $n1 = 0;
                foreach ($this->inclusiveFileType as $item1) {
                    $res['InclusiveFileType'][$n1] = $item1;
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
        if (isset($map['InclusiveFileType'])) {
            if (!empty($map['InclusiveFileType'])) {
                $model->inclusiveFileType = [];
                $n1 = 0;
                foreach ($map['InclusiveFileType'] as $item1) {
                    $model->inclusiveFileType[$n1] = $item1;
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
