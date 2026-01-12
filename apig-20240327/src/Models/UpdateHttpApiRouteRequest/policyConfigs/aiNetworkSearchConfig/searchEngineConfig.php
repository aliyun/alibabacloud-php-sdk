<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs\aiNetworkSearchConfig;

use AlibabaCloud\Dara\Model;

class searchEngineConfig extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $contentMode;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var string[]
     */
    public $optionArgs;

    /**
     * @var int
     */
    public $start;

    /**
     * @var string
     */
    public $timeRange;

    /**
     * @var int
     */
    public $timeoutMillisecond;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'apiKey' => 'apiKey',
        'contentMode' => 'contentMode',
        'count' => 'count',
        'endpoint' => 'endpoint',
        'industry' => 'industry',
        'optionArgs' => 'optionArgs',
        'start' => 'start',
        'timeRange' => 'timeRange',
        'timeoutMillisecond' => 'timeoutMillisecond',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->optionArgs)) {
            Model::validateArray($this->optionArgs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }

        if (null !== $this->contentMode) {
            $res['contentMode'] = $this->contentMode;
        }

        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
        }

        if (null !== $this->optionArgs) {
            if (\is_array($this->optionArgs)) {
                $res['optionArgs'] = [];
                foreach ($this->optionArgs as $key1 => $value1) {
                    $res['optionArgs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->start) {
            $res['start'] = $this->start;
        }

        if (null !== $this->timeRange) {
            $res['timeRange'] = $this->timeRange;
        }

        if (null !== $this->timeoutMillisecond) {
            $res['timeoutMillisecond'] = $this->timeoutMillisecond;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }

        if (isset($map['contentMode'])) {
            $model->contentMode = $map['contentMode'];
        }

        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['industry'])) {
            $model->industry = $map['industry'];
        }

        if (isset($map['optionArgs'])) {
            if (!empty($map['optionArgs'])) {
                $model->optionArgs = [];
                foreach ($map['optionArgs'] as $key1 => $value1) {
                    $model->optionArgs[$key1] = $value1;
                }
            }
        }

        if (isset($map['start'])) {
            $model->start = $map['start'];
        }

        if (isset($map['timeRange'])) {
            $model->timeRange = $map['timeRange'];
        }

        if (isset($map['timeoutMillisecond'])) {
            $model->timeoutMillisecond = $map['timeoutMillisecond'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
