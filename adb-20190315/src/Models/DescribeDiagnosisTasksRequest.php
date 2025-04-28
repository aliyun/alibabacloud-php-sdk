<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;

class DescribeDiagnosisTasksRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $order;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $processId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stageId;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'host' => 'Host',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'processId' => 'ProcessId',
        'regionId' => 'RegionId',
        'stageId' => 'StageId',
        'state' => 'State',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
