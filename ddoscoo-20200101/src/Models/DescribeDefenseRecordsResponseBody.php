<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDefenseRecordsResponseBody\defenseRecords;
use AlibabaCloud\Tea\Model;

class DescribeDefenseRecordsResponseBody extends Model
{
    /**
     * @description An array that consists of details of the log of an advanced mitigation session.
     *
     * @var defenseRecords[]
     */
    public $defenseRecords;

    /**
     * @description The ID of the request.
     *
     * @example 0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of advanced mitigation sessions.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'defenseRecords' => 'DefenseRecords',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
