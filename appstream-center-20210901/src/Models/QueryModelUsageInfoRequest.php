<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class QueryModelUsageInfoRequest extends Model
{
    /**
     * @var int
     */
    public $bizType;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $statDateType;
    protected $_name = [
        'bizType' => 'BizType',
        'endDate' => 'EndDate',
        'modelType' => 'ModelType',
        'startDate' => 'StartDate',
        'statDateType' => 'StatDateType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->statDateType) {
            $res['StatDateType'] = $this->statDateType;
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

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['StatDateType'])) {
            $model->statDateType = $map['StatDateType'];
        }

        return $model;
    }
}
