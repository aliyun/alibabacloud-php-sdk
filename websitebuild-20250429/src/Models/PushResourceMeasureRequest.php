<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class PushResourceMeasureRequest extends Model
{
    /**
     * @var int
     */
    public $amount;

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
    public $bizId;

    /**
     * @var string
     */
    public $measureData;

    /**
     * @var string
     */
    public $metaData;

    /**
     * @var string
     */
    public $resourceCode;

    /**
     * @var string
     */
    public $useTime;

    /**
     * @var string
     */
    public $useType;
    protected $_name = [
        'amount' => 'Amount',
        'belongId' => 'BelongId',
        'belongIdType' => 'BelongIdType',
        'bizId' => 'BizId',
        'measureData' => 'MeasureData',
        'metaData' => 'MetaData',
        'resourceCode' => 'ResourceCode',
        'useTime' => 'UseTime',
        'useType' => 'UseType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->belongId) {
            $res['BelongId'] = $this->belongId;
        }

        if (null !== $this->belongIdType) {
            $res['BelongIdType'] = $this->belongIdType;
        }

        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->measureData) {
            $res['MeasureData'] = $this->measureData;
        }

        if (null !== $this->metaData) {
            $res['MetaData'] = $this->metaData;
        }

        if (null !== $this->resourceCode) {
            $res['ResourceCode'] = $this->resourceCode;
        }

        if (null !== $this->useTime) {
            $res['UseTime'] = $this->useTime;
        }

        if (null !== $this->useType) {
            $res['UseType'] = $this->useType;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['BelongId'])) {
            $model->belongId = $map['BelongId'];
        }

        if (isset($map['BelongIdType'])) {
            $model->belongIdType = $map['BelongIdType'];
        }

        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['MeasureData'])) {
            $model->measureData = $map['MeasureData'];
        }

        if (isset($map['MetaData'])) {
            $model->metaData = $map['MetaData'];
        }

        if (isset($map['ResourceCode'])) {
            $model->resourceCode = $map['ResourceCode'];
        }

        if (isset($map['UseTime'])) {
            $model->useTime = $map['UseTime'];
        }

        if (isset($map['UseType'])) {
            $model->useType = $map['UseType'];
        }

        return $model;
    }
}
