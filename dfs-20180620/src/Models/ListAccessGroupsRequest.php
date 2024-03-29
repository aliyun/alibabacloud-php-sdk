<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Tea\Model;

class ListAccessGroupsRequest extends Model
{
    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $inputRegionId;

    /**
     * @example 100
     *
     * @var int
     */
    public $limit;

    /**
     * @example CreateTime
     *
     * @var string
     */
    public $orderBy;

    /**
     * @example ASC
     *
     * @var string
     */
    public $orderType;

    /**
     * @example 10
     *
     * @var int
     */
    public $startOffset;
    protected $_name = [
        'inputRegionId' => 'InputRegionId',
        'limit'         => 'Limit',
        'orderBy'       => 'OrderBy',
        'orderType'     => 'OrderType',
        'startOffset'   => 'StartOffset',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->startOffset) {
            $res['StartOffset'] = $this->startOffset;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAccessGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputRegionId'])) {
            $model->inputRegionId = $map['InputRegionId'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['StartOffset'])) {
            $model->startOffset = $map['StartOffset'];
        }

        return $model;
    }
}
