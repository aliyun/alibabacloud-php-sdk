<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models;

use AlibabaCloud\Dara\Model;

class DescribeAICallDetailsRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $gatewayRegion;

    /**
     * @var string
     */
    public $modelId;

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
    public $searchRequestId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $wyIds;
    protected $_name = [
        'bizType' => 'BizType',
        'endTime' => 'EndTime',
        'gatewayRegion' => 'GatewayRegion',
        'modelId' => 'ModelId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'searchRequestId' => 'SearchRequestId',
        'startTime' => 'StartTime',
        'wyIds' => 'WyIds',
    ];

    public function validate()
    {
        if (\is_array($this->wyIds)) {
            Model::validateArray($this->wyIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->gatewayRegion) {
            $res['GatewayRegion'] = $this->gatewayRegion;
        }

        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->searchRequestId) {
            $res['SearchRequestId'] = $this->searchRequestId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->wyIds) {
            if (\is_array($this->wyIds)) {
                $res['WyIds'] = [];
                $n1 = 0;
                foreach ($this->wyIds as $item1) {
                    $res['WyIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['GatewayRegion'])) {
            $model->gatewayRegion = $map['GatewayRegion'];
        }

        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SearchRequestId'])) {
            $model->searchRequestId = $map['SearchRequestId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['WyIds'])) {
            if (!empty($map['WyIds'])) {
                $model->wyIds = [];
                $n1 = 0;
                foreach ($map['WyIds'] as $item1) {
                    $model->wyIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
