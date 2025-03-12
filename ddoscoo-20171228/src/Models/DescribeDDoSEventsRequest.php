<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeDDoSEventsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $eip;

    /**
     * @description This parameter is required.
     *
     * @example 3289457324
     *
     * @var int
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $offset;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example xx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description This parameter is required.
     *
     * @example 3289457398
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'eip'             => 'Eip',
        'endTime'         => 'EndTime',
        'offset'          => 'Offset',
        'pageSize'        => 'PageSize',
        'resourceGroupId' => 'ResourceGroupId',
        'sourceIp'        => 'SourceIp',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eip) {
            $res['Eip'] = $this->eip;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDDoSEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
