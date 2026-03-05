<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class CheckResourceMeasureRequest extends Model
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
    public $resourceCode;

    /**
     * @var int
     */
    public $resourceValue;
    protected $_name = [
        'belongId' => 'BelongId',
        'belongIdType' => 'BelongIdType',
        'bizType' => 'BizType',
        'espBizId' => 'EspBizId',
        'orderComponentParams' => 'OrderComponentParams',
        'resourceCode' => 'ResourceCode',
        'resourceValue' => 'ResourceValue',
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

        if (null !== $this->resourceCode) {
            $res['ResourceCode'] = $this->resourceCode;
        }

        if (null !== $this->resourceValue) {
            $res['ResourceValue'] = $this->resourceValue;
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

        if (isset($map['ResourceCode'])) {
            $model->resourceCode = $map['ResourceCode'];
        }

        if (isset($map['ResourceValue'])) {
            $model->resourceValue = $map['ResourceValue'];
        }

        return $model;
    }
}
