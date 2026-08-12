<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\QuerySampleConsistencyJobDifferenceResponseBody;

use AlibabaCloud\Dara\Model;

class numberFeatureDifferences extends Model
{
    /**
     * @var float
     */
    public $diffValue;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $replyTableFeatureRawValue;

    /**
     * @var float
     */
    public $replyTableFeatureValue;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sampleTableFeatureRawValue;

    /**
     * @var float
     */
    public $sampleTableFeatureValue;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'diffValue' => 'DiffValue',
        'itemId' => 'ItemId',
        'replyTableFeatureRawValue' => 'ReplyTableFeatureRawValue',
        'replyTableFeatureValue' => 'ReplyTableFeatureValue',
        'requestId' => 'RequestId',
        'sampleTableFeatureRawValue' => 'SampleTableFeatureRawValue',
        'sampleTableFeatureValue' => 'SampleTableFeatureValue',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diffValue) {
            $res['DiffValue'] = $this->diffValue;
        }

        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        if (null !== $this->replyTableFeatureRawValue) {
            $res['ReplyTableFeatureRawValue'] = $this->replyTableFeatureRawValue;
        }

        if (null !== $this->replyTableFeatureValue) {
            $res['ReplyTableFeatureValue'] = $this->replyTableFeatureValue;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sampleTableFeatureRawValue) {
            $res['SampleTableFeatureRawValue'] = $this->sampleTableFeatureRawValue;
        }

        if (null !== $this->sampleTableFeatureValue) {
            $res['SampleTableFeatureValue'] = $this->sampleTableFeatureValue;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['DiffValue'])) {
            $model->diffValue = $map['DiffValue'];
        }

        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        if (isset($map['ReplyTableFeatureRawValue'])) {
            $model->replyTableFeatureRawValue = $map['ReplyTableFeatureRawValue'];
        }

        if (isset($map['ReplyTableFeatureValue'])) {
            $model->replyTableFeatureValue = $map['ReplyTableFeatureValue'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SampleTableFeatureRawValue'])) {
            $model->sampleTableFeatureRawValue = $map['SampleTableFeatureRawValue'];
        }

        if (isset($map['SampleTableFeatureValue'])) {
            $model->sampleTableFeatureValue = $map['SampleTableFeatureValue'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
