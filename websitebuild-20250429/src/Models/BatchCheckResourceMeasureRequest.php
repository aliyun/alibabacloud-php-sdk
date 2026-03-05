<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class BatchCheckResourceMeasureRequest extends Model
{
    /**
     * @var string
     */
    public $belongId;

    /**
     * @var string
     */
    public $belongIdType;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $espBizId;

    /**
     * @var string
     */
    public $orderComponentParams;

    /**
     * @var string
     */
    public $resourceCheckItems;
    protected $_name = [
        'belongId' => 'BelongId',
        'belongIdType' => 'BelongIdType',
        'bizType' => 'BizType',
        'espBizId' => 'EspBizId',
        'orderComponentParams' => 'OrderComponentParams',
        'resourceCheckItems' => 'ResourceCheckItems',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->belongId) {
            $res['BelongId'] = $this->belongId;
        }

        if (null !== $this->belongIdType) {
            $res['BelongIdType'] = $this->belongIdType;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->espBizId) {
            $res['EspBizId'] = $this->espBizId;
        }

        if (null !== $this->orderComponentParams) {
            $res['OrderComponentParams'] = $this->orderComponentParams;
        }

        if (null !== $this->resourceCheckItems) {
            $res['ResourceCheckItems'] = $this->resourceCheckItems;
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
        if (isset($map['BelongId'])) {
            $model->belongId = $map['BelongId'];
        }

        if (isset($map['BelongIdType'])) {
            $model->belongIdType = $map['BelongIdType'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['EspBizId'])) {
            $model->espBizId = $map['EspBizId'];
        }

        if (isset($map['OrderComponentParams'])) {
            $model->orderComponentParams = $map['OrderComponentParams'];
        }

        if (isset($map['ResourceCheckItems'])) {
            $model->resourceCheckItems = $map['ResourceCheckItems'];
        }

        return $model;
    }
}
