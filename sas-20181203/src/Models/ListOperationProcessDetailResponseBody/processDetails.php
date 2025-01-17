<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationProcessDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationProcessDetailResponseBody\processDetails\checks;

class processDetails extends Model
{
    /**
     * @var int
     */
    public $assetSubType;
    /**
     * @var int
     */
    public $assetType;
    /**
     * @var int
     */
    public $assetVendor;
    /**
     * @var checks[]
     */
    public $checks;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $detailTaskId;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var int
     */
    public $statusCode;
    /**
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
        if (\is_array($this->checks)) {
            Model::validateArray($this->checks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->checks)) {
                $res['Checks'] = [];
                $n1            = 0;
                foreach ($this->checks as $item1) {
                    $res['Checks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1            = 0;
                foreach ($map['Checks'] as $item1) {
                    $model->checks[$n1++] = checks::fromMap($item1);
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
