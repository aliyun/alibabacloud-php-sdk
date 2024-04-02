<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeOpenApiRcpStatsResponseBody;

use AlibabaCloud\Tea\Model;

class statList extends Model
{
    /**
     * @var int
     */
    public $blockCount;

    /**
     * @var string
     */
    public $date;

    /**
     * @var int
     */
    public $passCount;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $reviewCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $totalDuration;
    protected $_name = [
        'blockCount'    => 'BlockCount',
        'date'          => 'Date',
        'passCount'     => 'PassCount',
        'resourceType'  => 'ResourceType',
        'reviewCount'   => 'ReviewCount',
        'totalCount'    => 'TotalCount',
        'totalDuration' => 'TotalDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockCount) {
            $res['BlockCount'] = $this->blockCount;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->passCount) {
            $res['PassCount'] = $this->passCount;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->reviewCount) {
            $res['ReviewCount'] = $this->reviewCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->totalDuration) {
            $res['TotalDuration'] = $this->totalDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockCount'])) {
            $model->blockCount = $map['BlockCount'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['PassCount'])) {
            $model->passCount = $map['PassCount'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ReviewCount'])) {
            $model->reviewCount = $map['ReviewCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TotalDuration'])) {
            $model->totalDuration = $map['TotalDuration'];
        }

        return $model;
    }
}
