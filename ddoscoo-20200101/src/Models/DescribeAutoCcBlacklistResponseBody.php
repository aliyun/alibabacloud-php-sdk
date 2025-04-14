<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAutoCcBlacklistResponseBody\autoCcBlacklist;

class DescribeAutoCcBlacklistResponseBody extends Model
{
    /**
     * @var autoCcBlacklist[]
     */
    public $autoCcBlacklist;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'autoCcBlacklist' => 'AutoCcBlacklist',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->autoCcBlacklist)) {
            Model::validateArray($this->autoCcBlacklist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoCcBlacklist) {
            if (\is_array($this->autoCcBlacklist)) {
                $res['AutoCcBlacklist'] = [];
                $n1 = 0;
                foreach ($this->autoCcBlacklist as $item1) {
                    $res['AutoCcBlacklist'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AutoCcBlacklist'])) {
            if (!empty($map['AutoCcBlacklist'])) {
                $model->autoCcBlacklist = [];
                $n1 = 0;
                foreach ($map['AutoCcBlacklist'] as $item1) {
                    $model->autoCcBlacklist[$n1++] = autoCcBlacklist::fromMap($item1);
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
