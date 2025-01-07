<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationProcessDetailResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationProcessDetailResponseBody\processDetails\checks;
use AlibabaCloud\Tea\Model;

class processDetails extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $assetSubType;

    /**
     * @example 8
     *
     * @var int
     */
    public $assetType;

    /**
     * @example 0
     *
     * @var int
     */
    public $assetVendor;

    /**
     * @var checks[]
     */
    public $checks;

    /**
     * @example 1706544199000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example fb4bcd41-a916-46bc-ab1a-65fd383be***
     *
     * @var string
     */
    public $detailTaskId;

    /**
     * @example 1706544199000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1730335622000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $statusCode;

    /**
     * @example v34578b8-e567-47ec-2345-3e5b077ca***
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'assetSubType' => 'AssetSubType',
        'assetType'    => 'AssetType',
        'assetVendor'  => 'AssetVendor',
        'checks'       => 'Checks',
        'createTime'   => 'CreateTime',
        'detailTaskId' => 'DetailTaskId',
        'endTime'      => 'EndTime',
        'startTime'    => 'StartTime',
        'statusCode'   => 'StatusCode',
        'taskId'       => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetSubType) {
            $res['AssetSubType'] = $this->assetSubType;
        }
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->assetVendor) {
            $res['AssetVendor'] = $this->assetVendor;
        }
        if (null !== $this->checks) {
            $res['Checks'] = [];
            if (null !== $this->checks && \is_array($this->checks)) {
                $n = 0;
                foreach ($this->checks as $item) {
                    $res['Checks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->detailTaskId) {
            $res['DetailTaskId'] = $this->detailTaskId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return processDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetSubType'])) {
            $model->assetSubType = $map['AssetSubType'];
        }
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['AssetVendor'])) {
            $model->assetVendor = $map['AssetVendor'];
        }
        if (isset($map['Checks'])) {
            if (!empty($map['Checks'])) {
                $model->checks = [];
                $n             = 0;
                foreach ($map['Checks'] as $item) {
                    $model->checks[$n++] = null !== $item ? checks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DetailTaskId'])) {
            $model->detailTaskId = $map['DetailTaskId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
