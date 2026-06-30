<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class DescribeMOTokenUsageDetailRequest extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $consumerName;

    /**
     * @var string
     */
    public $cursor;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $usageType;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'consumerName' => 'ConsumerName',
        'cursor' => 'Cursor',
        'endTime' => 'EndTime',
        'instanceId' => 'InstanceId',
        'model' => 'Model',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'region' => 'Region',
        'startTime' => 'StartTime',
        'usageType' => 'UsageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->consumerName) {
            $res['ConsumerName'] = $this->consumerName;
        }

        if (null !== $this->cursor) {
            $res['Cursor'] = $this->cursor;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->usageType) {
            $res['UsageType'] = $this->usageType;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['ConsumerName'])) {
            $model->consumerName = $map['ConsumerName'];
        }

        if (isset($map['Cursor'])) {
            $model->cursor = $map['Cursor'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UsageType'])) {
            $model->usageType = $map['UsageType'];
        }

        return $model;
    }
}
