<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\AiServiceConfig;

use AlibabaCloud\Dara\Model;

class bedrockServiceConfig extends Model
{
    /**
     * @var string
     */
    public $awsAccessKey;

    /**
     * @var string
     */
    public $awsRegion;

    /**
     * @var string
     */
    public $awsSecretKey;

    /**
     * @var bool[]
     */
    public $bedrockPromptCachePointPositions;

    /**
     * @var string
     */
    public $endpointMode;

    /**
     * @var bool
     */
    public $promptCacheEnable;

    /**
     * @var string
     */
    public $promptCacheRetention;

    /**
     * @var string
     */
    public $promptCacheStrategy;
    protected $_name = [
        'awsAccessKey' => 'awsAccessKey',
        'awsRegion' => 'awsRegion',
        'awsSecretKey' => 'awsSecretKey',
        'bedrockPromptCachePointPositions' => 'bedrockPromptCachePointPositions',
        'endpointMode' => 'endpointMode',
        'promptCacheEnable' => 'promptCacheEnable',
        'promptCacheRetention' => 'promptCacheRetention',
        'promptCacheStrategy' => 'promptCacheStrategy',
    ];

    public function validate()
    {
        if (\is_array($this->bedrockPromptCachePointPositions)) {
            Model::validateArray($this->bedrockPromptCachePointPositions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->awsAccessKey) {
            $res['awsAccessKey'] = $this->awsAccessKey;
        }

        if (null !== $this->awsRegion) {
            $res['awsRegion'] = $this->awsRegion;
        }

        if (null !== $this->awsSecretKey) {
            $res['awsSecretKey'] = $this->awsSecretKey;
        }

        if (null !== $this->bedrockPromptCachePointPositions) {
            if (\is_array($this->bedrockPromptCachePointPositions)) {
                $res['bedrockPromptCachePointPositions'] = [];
                foreach ($this->bedrockPromptCachePointPositions as $key1 => $value1) {
                    $res['bedrockPromptCachePointPositions'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->endpointMode) {
            $res['endpointMode'] = $this->endpointMode;
        }

        if (null !== $this->promptCacheEnable) {
            $res['promptCacheEnable'] = $this->promptCacheEnable;
        }

        if (null !== $this->promptCacheRetention) {
            $res['promptCacheRetention'] = $this->promptCacheRetention;
        }

        if (null !== $this->promptCacheStrategy) {
            $res['promptCacheStrategy'] = $this->promptCacheStrategy;
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
        if (isset($map['awsAccessKey'])) {
            $model->awsAccessKey = $map['awsAccessKey'];
        }

        if (isset($map['awsRegion'])) {
            $model->awsRegion = $map['awsRegion'];
        }

        if (isset($map['awsSecretKey'])) {
            $model->awsSecretKey = $map['awsSecretKey'];
        }

        if (isset($map['bedrockPromptCachePointPositions'])) {
            if (!empty($map['bedrockPromptCachePointPositions'])) {
                $model->bedrockPromptCachePointPositions = [];
                foreach ($map['bedrockPromptCachePointPositions'] as $key1 => $value1) {
                    $model->bedrockPromptCachePointPositions[$key1] = $value1;
                }
            }
        }

        if (isset($map['endpointMode'])) {
            $model->endpointMode = $map['endpointMode'];
        }

        if (isset($map['promptCacheEnable'])) {
            $model->promptCacheEnable = $map['promptCacheEnable'];
        }

        if (isset($map['promptCacheRetention'])) {
            $model->promptCacheRetention = $map['promptCacheRetention'];
        }

        if (isset($map['promptCacheStrategy'])) {
            $model->promptCacheStrategy = $map['promptCacheStrategy'];
        }

        return $model;
    }
}
