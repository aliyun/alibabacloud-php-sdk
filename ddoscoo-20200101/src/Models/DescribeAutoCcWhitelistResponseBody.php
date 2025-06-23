<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAutoCcWhitelistResponseBody\autoCcWhitelist;

class DescribeAutoCcWhitelistResponseBody extends Model
{
    /**
     * @var autoCcWhitelist[]
     */
    public $autoCcWhitelist;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'autoCcWhitelist' => 'AutoCcWhitelist',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->autoCcWhitelist)) {
            Model::validateArray($this->autoCcWhitelist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoCcWhitelist) {
            if (\is_array($this->autoCcWhitelist)) {
                $res['AutoCcWhitelist'] = [];
                $n1 = 0;
                foreach ($this->autoCcWhitelist as $item1) {
                    $res['AutoCcWhitelist'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AutoCcWhitelist'])) {
            if (!empty($map['AutoCcWhitelist'])) {
                $model->autoCcWhitelist = [];
                $n1 = 0;
                foreach ($map['AutoCcWhitelist'] as $item1) {
                    $model->autoCcWhitelist[$n1] = autoCcWhitelist::fromMap($item1);
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
