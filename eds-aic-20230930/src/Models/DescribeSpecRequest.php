<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DescribeSpecRequest extends Model
{
    /**
     * @var string
     */
    public $bizRegionId;
    /**
     * @var string
     */
    public $matrixSpec;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $saleMode;
    /**
     * @var string[]
     */
    public $specIds;
    /**
     * @var string
     */
    public $specStatus;
    /**
     * @var string
     */
    public $specType;
    protected $_name = [
        'bizRegionId' => 'BizRegionId',
        'matrixSpec'  => 'MatrixSpec',
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'saleMode'    => 'SaleMode',
        'specIds'     => 'SpecIds',
        'specStatus'  => 'SpecStatus',
        'specType'    => 'SpecType',
    ];

    public function validate()
    {
        if (\is_array($this->specIds)) {
            Model::validateArray($this->specIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->specIds)) {
                $res['SpecIds'] = [];
                $n1             = 0;
                foreach ($this->specIds as $item1) {
                    $res['SpecIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->specStatus) {
            $res['SpecStatus'] = $this->specStatus;
        }

        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
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
                $model->specIds = [];
                $n1             = 0;
                foreach ($map['SpecIds'] as $item1) {
                    $model->specIds[$n1++] = $item1;
                }
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
