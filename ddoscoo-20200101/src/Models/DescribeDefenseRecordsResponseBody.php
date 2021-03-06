<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDefenseRecordsResponseBody\defenseRecords;
use AlibabaCloud\Tea\Model;

class DescribeDefenseRecordsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var defenseRecords[]
     */
    public $defenseRecords;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'totalCount'     => 'TotalCount',
        'defenseRecords' => 'DefenseRecords',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->defenseRecords) {
            $res['DefenseRecords'] = [];
            if (null !== $this->defenseRecords && \is_array($this->defenseRecords)) {
                $n = 0;
                foreach ($this->defenseRecords as $item) {
                    $res['DefenseRecords'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDefenseRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['DefenseRecords'])) {
            if (!empty($map['DefenseRecords'])) {
                $model->defenseRecords = [];
                $n                     = 0;
                foreach ($map['DefenseRecords'] as $item) {
                    $model->defenseRecords[$n++] = null !== $item ? defenseRecords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
