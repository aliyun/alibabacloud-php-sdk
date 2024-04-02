<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeUsageBillResponseBody;

use AlibabaCloud\Tea\Model;

class billList extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $confirmCount;

    /**
     * @var string
     */
    public $day;

    /**
     * @var int
     */
    public $freeCount;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $reviewCount;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $subUid;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'bizType'      => 'BizType',
        'confirmCount' => 'ConfirmCount',
        'day'          => 'Day',
        'freeCount'    => 'FreeCount',
        'region'       => 'Region',
        'reviewCount'  => 'ReviewCount',
        'scene'        => 'Scene',
        'subUid'       => 'SubUid',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->confirmCount) {
            $res['ConfirmCount'] = $this->confirmCount;
        }
        if (null !== $this->day) {
            $res['Day'] = $this->day;
        }
        if (null !== $this->freeCount) {
            $res['FreeCount'] = $this->freeCount;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->reviewCount) {
            $res['ReviewCount'] = $this->reviewCount;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->subUid) {
            $res['SubUid'] = $this->subUid;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return billList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['ConfirmCount'])) {
            $model->confirmCount = $map['ConfirmCount'];
        }
        if (isset($map['Day'])) {
            $model->day = $map['Day'];
        }
        if (isset($map['FreeCount'])) {
            $model->freeCount = $map['FreeCount'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ReviewCount'])) {
            $model->reviewCount = $map['ReviewCount'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['SubUid'])) {
            $model->subUid = $map['SubUid'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
