<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetRuntimeModelConfigResponseBody\data\modelProviderList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetRuntimeModelConfigResponseBody\data\modelProviderList\llmInfoList\inferenceMetadata;

class llmInfoList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $features;

    /**
     * @var inferenceMetadata
     */
    public $inferenceMetadata;

    /**
     * @var string
     */
    public $llmCode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $publishedTime;

    /**
     * @var string
     */
    public $riskType;
    protected $_name = [
        'description' => 'Description',
        'features' => 'Features',
        'inferenceMetadata' => 'InferenceMetadata',
        'llmCode' => 'LlmCode',
        'name' => 'Name',
        'publishedTime' => 'PublishedTime',
        'riskType' => 'RiskType',
    ];

    public function validate()
    {
        if (\is_array($this->features)) {
            Model::validateArray($this->features);
        }
        if (null !== $this->inferenceMetadata) {
            $this->inferenceMetadata->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->features) {
            if (\is_array($this->features)) {
                $res['Features'] = [];
                $n1 = 0;
                foreach ($this->features as $item1) {
                    $res['Features'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->inferenceMetadata) {
            $res['InferenceMetadata'] = null !== $this->inferenceMetadata ? $this->inferenceMetadata->toArray($noStream) : $this->inferenceMetadata;
        }

        if (null !== $this->llmCode) {
            $res['LlmCode'] = $this->llmCode;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->publishedTime) {
            $res['PublishedTime'] = $this->publishedTime;
        }

        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = [];
                $n1 = 0;
                foreach ($map['Features'] as $item1) {
                    $model->features[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InferenceMetadata'])) {
            $model->inferenceMetadata = inferenceMetadata::fromMap($map['InferenceMetadata']);
        }

        if (isset($map['LlmCode'])) {
            $model->llmCode = $map['LlmCode'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PublishedTime'])) {
            $model->publishedTime = $map['PublishedTime'];
        }

        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }

        return $model;
    }
}
