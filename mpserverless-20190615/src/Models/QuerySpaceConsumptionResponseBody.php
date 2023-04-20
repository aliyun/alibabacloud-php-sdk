<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceConsumptionResponseBody\csUsage;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceConsumptionResponseBody\dbUsage;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceConsumptionResponseBody\fcUsage;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceConsumptionResponseBody\whUsage;
use AlibabaCloud\Tea\Model;

class QuerySpaceConsumptionResponseBody extends Model
{
    /**
     * @var csUsage
     */
    public $csUsage;

    /**
     * @example 1667059200
     *
     * @var int
     */
    public $cycleEndTime;

    /**
     * @example 1664467200
     *
     * @var int
     */
    public $cycleStartTime;

    /**
     * @var dbUsage
     */
    public $dbUsage;

    /**
     * @var fcUsage
     */
    public $fcUsage;

    /**
     * @example 0
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example F16FEFE8-4E57-5795-BE7B-2D29F0C61B8C
     *
     * @var string
     */
    public $requestId;

    /**
     * @example mp-26fe89b6-****-4a90-b332-b424ce9651e6
     *
     * @var string
     */
    public $spaceId;

    /**
     * @example BASE
     *
     * @var string
     */
    public $specCode;

    /**
     * @var whUsage
     */
    public $whUsage;
    protected $_name = [
        'csUsage'        => 'CsUsage',
        'cycleEndTime'   => 'CycleEndTime',
        'cycleStartTime' => 'CycleStartTime',
        'dbUsage'        => 'DbUsage',
        'fcUsage'        => 'FcUsage',
        'gmtCreate'      => 'GmtCreate',
        'requestId'      => 'RequestId',
        'spaceId'        => 'SpaceId',
        'specCode'       => 'SpecCode',
        'whUsage'        => 'WhUsage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->csUsage) {
            $res['CsUsage'] = null !== $this->csUsage ? $this->csUsage->toMap() : null;
        }
        if (null !== $this->cycleEndTime) {
            $res['CycleEndTime'] = $this->cycleEndTime;
        }
        if (null !== $this->cycleStartTime) {
            $res['CycleStartTime'] = $this->cycleStartTime;
        }
        if (null !== $this->dbUsage) {
            $res['DbUsage'] = null !== $this->dbUsage ? $this->dbUsage->toMap() : null;
        }
        if (null !== $this->fcUsage) {
            $res['FcUsage'] = null !== $this->fcUsage ? $this->fcUsage->toMap() : null;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->specCode) {
            $res['SpecCode'] = $this->specCode;
        }
        if (null !== $this->whUsage) {
            $res['WhUsage'] = null !== $this->whUsage ? $this->whUsage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySpaceConsumptionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CsUsage'])) {
            $model->csUsage = csUsage::fromMap($map['CsUsage']);
        }
        if (isset($map['CycleEndTime'])) {
            $model->cycleEndTime = $map['CycleEndTime'];
        }
        if (isset($map['CycleStartTime'])) {
            $model->cycleStartTime = $map['CycleStartTime'];
        }
        if (isset($map['DbUsage'])) {
            $model->dbUsage = dbUsage::fromMap($map['DbUsage']);
        }
        if (isset($map['FcUsage'])) {
            $model->fcUsage = fcUsage::fromMap($map['FcUsage']);
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['SpecCode'])) {
            $model->specCode = $map['SpecCode'];
        }
        if (isset($map['WhUsage'])) {
            $model->whUsage = whUsage::fromMap($map['WhUsage']);
        }

        return $model;
    }
}
