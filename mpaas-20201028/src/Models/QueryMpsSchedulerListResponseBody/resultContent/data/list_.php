<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMpsSchedulerListResponseBody\resultContent\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $createType;

    /**
     * @var int
     */
    public $deliveryType;

    /**
     * @var string
     */
    public $executedStatus;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $pushContent;

    /**
     * @var int
     */
    public $pushTime;

    /**
     * @var string
     */
    public $pushTitle;

    /**
     * @var int
     */
    public $strategyType;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $uniqueId;
    protected $_name = [
        'createType'     => 'CreateType',
        'deliveryType'   => 'DeliveryType',
        'executedStatus' => 'ExecutedStatus',
        'gmtCreate'      => 'GmtCreate',
        'parentId'       => 'ParentId',
        'pushContent'    => 'PushContent',
        'pushTime'       => 'PushTime',
        'pushTitle'      => 'PushTitle',
        'strategyType'   => 'StrategyType',
        'type'           => 'Type',
        'uniqueId'       => 'UniqueId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createType) {
            $res['CreateType'] = $this->createType;
        }
        if (null !== $this->deliveryType) {
            $res['DeliveryType'] = $this->deliveryType;
        }
        if (null !== $this->executedStatus) {
            $res['ExecutedStatus'] = $this->executedStatus;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->pushContent) {
            $res['PushContent'] = $this->pushContent;
        }
        if (null !== $this->pushTime) {
            $res['PushTime'] = $this->pushTime;
        }
        if (null !== $this->pushTitle) {
            $res['PushTitle'] = $this->pushTitle;
        }
        if (null !== $this->strategyType) {
            $res['StrategyType'] = $this->strategyType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateType'])) {
            $model->createType = $map['CreateType'];
        }
        if (isset($map['DeliveryType'])) {
            $model->deliveryType = $map['DeliveryType'];
        }
        if (isset($map['ExecutedStatus'])) {
            $model->executedStatus = $map['ExecutedStatus'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['PushContent'])) {
            $model->pushContent = $map['PushContent'];
        }
        if (isset($map['PushTime'])) {
            $model->pushTime = $map['PushTime'];
        }
        if (isset($map['PushTitle'])) {
            $model->pushTitle = $map['PushTitle'];
        }
        if (isset($map['StrategyType'])) {
            $model->strategyType = $map['StrategyType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }

        return $model;
    }
}
