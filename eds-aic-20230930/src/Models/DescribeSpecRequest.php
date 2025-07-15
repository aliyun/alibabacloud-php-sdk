<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DescribeSpecRequest extends Model
{
    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @description The matrix specification.
     *
     * Valid values:
     *
     *   cpm.gn6.gx1
     *
     * @example cpm.gn6.gx1
     *
     * @var string
     */
    public $matrixSpec;

    /**
     * @description The maximum number of items to return per page in a paginated query. The value range is 1 to 100, with a default value of 100.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description Indicates the starting position for reading. If left empty, it starts from the beginning.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uONHqPtDLM2U8s****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The purchase mode of cloud mobile phones.
     *
     * Valid values:
     *
     *   Instance (default): the instance group mode.
     *   Node: the matrix mode [whitelisted].
     *
     * @example Instance
     *
     * @var string
     */
    public $saleMode;

    /**
     * @description List of specification IDs.
     *
     * @var string[]
     */
    public $specIds;

    /**
     * @description Specification status.
     *
     * @example Available
     *
     * @var string
     */
    public $specStatus;

    /**
     * @description Specification type.
     *
     * @example ARM
     *
     * @var string
     */
    public $specType;
    protected $_name = [
        'bizRegionId' => 'BizRegionId',
        'matrixSpec' => 'MatrixSpec',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'saleMode' => 'SaleMode',
        'specIds' => 'SpecIds',
        'specStatus' => 'SpecStatus',
        'specType' => 'SpecType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->matrixSpec) {
            $res['MatrixSpec'] = $this->matrixSpec;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->saleMode) {
            $res['SaleMode'] = $this->saleMode;
        }
        if (null !== $this->specIds) {
            $res['SpecIds'] = $this->specIds;
        }
        if (null !== $this->specStatus) {
            $res['SpecStatus'] = $this->specStatus;
        }
        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['MatrixSpec'])) {
            $model->matrixSpec = $map['MatrixSpec'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['SaleMode'])) {
            $model->saleMode = $map['SaleMode'];
        }
        if (isset($map['SpecIds'])) {
            if (!empty($map['SpecIds'])) {
                $model->specIds = $map['SpecIds'];
            }
        }
        if (isset($map['SpecStatus'])) {
            $model->specStatus = $map['SpecStatus'];
        }
        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }

        return $model;
    }
}
