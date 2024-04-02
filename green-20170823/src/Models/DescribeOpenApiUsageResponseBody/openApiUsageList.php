<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeOpenApiUsageResponseBody;

use AlibabaCloud\Tea\Model;

class openApiUsageList extends Model
{
    /**
     * @var int
     */
    public $blockCount;

    /**
     * @var int
     */
    public $blockDuration;

    /**
     * @var string
     */
    public $date;

    /**
     * @var int
     */
    public $innerTotalCount;

    /**
     * @var int
     */
    public $outerTotalCount;

    /**
     * @var int
     */
    public $passCount;

    /**
     * @var int
     */
    public $passDuration;

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
    public $reviewDuration;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $totalDuration;
    protected $_name = [
        'blockCount'      => 'BlockCount',
        'blockDuration'   => 'BlockDuration',
        'date'            => 'Date',
        'innerTotalCount' => 'InnerTotalCount',
        'outerTotalCount' => 'OuterTotalCount',
        'passCount'       => 'PassCount',
        'passDuration'    => 'PassDuration',
        'resourceType'    => 'ResourceType',
        'reviewCount'     => 'ReviewCount',
        'reviewDuration'  => 'ReviewDuration',
        'scene'           => 'Scene',
        'totalCount'      => 'TotalCount',
        'totalDuration'   => 'TotalDuration',
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
        if (null !== $this->blockDuration) {
            $res['BlockDuration'] = $this->blockDuration;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->innerTotalCount) {
            $res['InnerTotalCount'] = $this->innerTotalCount;
        }
        if (null !== $this->outerTotalCount) {
            $res['OuterTotalCount'] = $this->outerTotalCount;
        }
        if (null !== $this->passCount) {
            $res['PassCount'] = $this->passCount;
        }
        if (null !== $this->passDuration) {
            $res['PassDuration'] = $this->passDuration;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->reviewCount) {
            $res['ReviewCount'] = $this->reviewCount;
        }
        if (null !== $this->reviewDuration) {
            $res['ReviewDuration'] = $this->reviewDuration;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
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
     * @return openApiUsageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockCount'])) {
            $model->blockCount = $map['BlockCount'];
        }
        if (isset($map['BlockDuration'])) {
            $model->blockDuration = $map['BlockDuration'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['InnerTotalCount'])) {
            $model->innerTotalCount = $map['InnerTotalCount'];
        }
        if (isset($map['OuterTotalCount'])) {
            $model->outerTotalCount = $map['OuterTotalCount'];
        }
        if (isset($map['PassCount'])) {
            $model->passCount = $map['PassCount'];
        }
        if (isset($map['PassDuration'])) {
            $model->passDuration = $map['PassDuration'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ReviewCount'])) {
            $model->reviewCount = $map['ReviewCount'];
        }
        if (isset($map['ReviewDuration'])) {
            $model->reviewDuration = $map['ReviewDuration'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
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
