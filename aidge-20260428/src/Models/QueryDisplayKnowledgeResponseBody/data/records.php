<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\QueryDisplayKnowledgeResponseBody\data;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $failureMessage;

    /**
     * @var string
     */
    public $failureReason;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $imageUrlExpireTime;

    /**
     * @var int
     */
    public $recordId;

    /**
     * @var string
     */
    public $skuId;

    /**
     * @var string
     */
    public $skuName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'failureMessage' => 'FailureMessage',
        'failureReason' => 'FailureReason',
        'gmtModified' => 'GmtModified',
        'imageUrl' => 'ImageUrl',
        'imageUrlExpireTime' => 'ImageUrlExpireTime',
        'recordId' => 'RecordId',
        'skuId' => 'SkuId',
        'skuName' => 'SkuName',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failureMessage) {
            $res['FailureMessage'] = $this->failureMessage;
        }

        if (null !== $this->failureReason) {
            $res['FailureReason'] = $this->failureReason;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->imageUrlExpireTime) {
            $res['ImageUrlExpireTime'] = $this->imageUrlExpireTime;
        }

        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }

        if (null !== $this->skuName) {
            $res['SkuName'] = $this->skuName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['FailureMessage'])) {
            $model->failureMessage = $map['FailureMessage'];
        }

        if (isset($map['FailureReason'])) {
            $model->failureReason = $map['FailureReason'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['ImageUrlExpireTime'])) {
            $model->imageUrlExpireTime = $map['ImageUrlExpireTime'];
        }

        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }

        if (isset($map['SkuName'])) {
            $model->skuName = $map['SkuName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
