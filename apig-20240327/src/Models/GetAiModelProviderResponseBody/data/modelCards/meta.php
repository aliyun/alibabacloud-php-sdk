<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetAiModelProviderResponseBody\data\modelCards;

use AlibabaCloud\Dara\Model;

class meta extends Model
{
    /**
     * @var int
     */
    public $maxInputTokens;

    /**
     * @var int
     */
    public $maxOutputTokens;

    /**
     * @var int
     */
    public $maxTokens;

    /**
     * @var string[]
     */
    public $supportedInputModalities;

    /**
     * @var string[]
     */
    public $supportedOutputModalities;
    protected $_name = [
        'maxInputTokens' => 'maxInputTokens',
        'maxOutputTokens' => 'maxOutputTokens',
        'maxTokens' => 'maxTokens',
        'supportedInputModalities' => 'supportedInputModalities',
        'supportedOutputModalities' => 'supportedOutputModalities',
    ];

    public function validate()
    {
        if (\is_array($this->supportedInputModalities)) {
            Model::validateArray($this->supportedInputModalities);
        }
        if (\is_array($this->supportedOutputModalities)) {
            Model::validateArray($this->supportedOutputModalities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxInputTokens) {
            $res['maxInputTokens'] = $this->maxInputTokens;
        }

        if (null !== $this->maxOutputTokens) {
            $res['maxOutputTokens'] = $this->maxOutputTokens;
        }

        if (null !== $this->maxTokens) {
            $res['maxTokens'] = $this->maxTokens;
        }

        if (null !== $this->supportedInputModalities) {
            if (\is_array($this->supportedInputModalities)) {
                $res['supportedInputModalities'] = [];
                $n1 = 0;
                foreach ($this->supportedInputModalities as $item1) {
                    $res['supportedInputModalities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->supportedOutputModalities) {
            if (\is_array($this->supportedOutputModalities)) {
                $res['supportedOutputModalities'] = [];
                $n1 = 0;
                foreach ($this->supportedOutputModalities as $item1) {
                    $res['supportedOutputModalities'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['maxInputTokens'])) {
            $model->maxInputTokens = $map['maxInputTokens'];
        }

        if (isset($map['maxOutputTokens'])) {
            $model->maxOutputTokens = $map['maxOutputTokens'];
        }

        if (isset($map['maxTokens'])) {
            $model->maxTokens = $map['maxTokens'];
        }

        if (isset($map['supportedInputModalities'])) {
            if (!empty($map['supportedInputModalities'])) {
                $model->supportedInputModalities = [];
                $n1 = 0;
                foreach ($map['supportedInputModalities'] as $item1) {
                    $model->supportedInputModalities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['supportedOutputModalities'])) {
            if (!empty($map['supportedOutputModalities'])) {
                $model->supportedOutputModalities = [];
                $n1 = 0;
                foreach ($map['supportedOutputModalities'] as $item1) {
                    $model->supportedOutputModalities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
