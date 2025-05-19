<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ReportSampleConsistencyJobResponseBody\featuresDifference;

class ReportSampleConsistencyJobResponseBody extends Model
{
    /**
     * @var featuresDifference[]
     */
    public $featuresDifference;

    /**
     * @var int
     */
    public $replyTableFeatures;

    /**
     * @var int
     */
    public $replyTableLostFeatures;

    /**
     * @var int
     */
    public $requestId;

    /**
     * @var int
     */
    public $sampleTableFeatures;

    /**
     * @var int
     */
    public $sampleTableLostFeatures;
    protected $_name = [
        'featuresDifference' => 'FeaturesDifference',
        'replyTableFeatures' => 'ReplyTableFeatures',
        'replyTableLostFeatures' => 'ReplyTableLostFeatures',
        'requestId' => 'RequestId',
        'sampleTableFeatures' => 'SampleTableFeatures',
        'sampleTableLostFeatures' => 'SampleTableLostFeatures',
    ];

    public function validate()
    {
        if (\is_array($this->featuresDifference)) {
            Model::validateArray($this->featuresDifference);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featuresDifference) {
            if (\is_array($this->featuresDifference)) {
                $res['FeaturesDifference'] = [];
                $n1 = 0;
                foreach ($this->featuresDifference as $item1) {
                    $res['FeaturesDifference'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->replyTableFeatures) {
            $res['ReplyTableFeatures'] = $this->replyTableFeatures;
        }

        if (null !== $this->replyTableLostFeatures) {
            $res['ReplyTableLostFeatures'] = $this->replyTableLostFeatures;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sampleTableFeatures) {
            $res['SampleTableFeatures'] = $this->sampleTableFeatures;
        }

        if (null !== $this->sampleTableLostFeatures) {
            $res['SampleTableLostFeatures'] = $this->sampleTableLostFeatures;
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
        if (isset($map['FeaturesDifference'])) {
            if (!empty($map['FeaturesDifference'])) {
                $model->featuresDifference = [];
                $n1 = 0;
                foreach ($map['FeaturesDifference'] as $item1) {
                    $model->featuresDifference[$n1++] = featuresDifference::fromMap($item1);
                }
            }
        }

        if (isset($map['ReplyTableFeatures'])) {
            $model->replyTableFeatures = $map['ReplyTableFeatures'];
        }

        if (isset($map['ReplyTableLostFeatures'])) {
            $model->replyTableLostFeatures = $map['ReplyTableLostFeatures'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SampleTableFeatures'])) {
            $model->sampleTableFeatures = $map['SampleTableFeatures'];
        }

        if (isset($map['SampleTableLostFeatures'])) {
            $model->sampleTableLostFeatures = $map['SampleTableLostFeatures'];
        }

        return $model;
    }
}
