<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeWebLockExclusiveFileTypeResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $exclusiveFileType;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'exclusiveFileType' => 'ExclusiveFileType',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->exclusiveFileType)) {
            Model::validateArray($this->exclusiveFileType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exclusiveFileType) {
            if (\is_array($this->exclusiveFileType)) {
                $res['ExclusiveFileType'] = [];
                $n1                       = 0;
                foreach ($this->exclusiveFileType as $item1) {
                    $res['ExclusiveFileType'][$n1++] = $item1;
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
        if (isset($map['ExclusiveFileType'])) {
            if (!empty($map['ExclusiveFileType'])) {
                $model->exclusiveFileType = [];
                $n1                       = 0;
                foreach ($map['ExclusiveFileType'] as $item1) {
                    $model->exclusiveFileType[$n1++] = $item1;
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
