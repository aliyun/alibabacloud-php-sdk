<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511\Models;

use AlibabaCloud\Dara\Model;

class CreateImageTaskRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $n;

    /**
     * @var string
     */
    public $negativePrompt;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var bool
     */
    public $promptExtend;

    /**
     * @var int
     */
    public $seed;

    /**
     * @var string
     */
    public $size;

    /**
     * @var bool
     */
    public $watermark;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'model' => 'Model',
        'n' => 'N',
        'negativePrompt' => 'NegativePrompt',
        'prompt' => 'Prompt',
        'promptExtend' => 'PromptExtend',
        'seed' => 'Seed',
        'size' => 'Size',
        'watermark' => 'Watermark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->n) {
            $res['N'] = $this->n;
        }

        if (null !== $this->negativePrompt) {
            $res['NegativePrompt'] = $this->negativePrompt;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->promptExtend) {
            $res['PromptExtend'] = $this->promptExtend;
        }

        if (null !== $this->seed) {
            $res['Seed'] = $this->seed;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->watermark) {
            $res['Watermark'] = $this->watermark;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['N'])) {
            $model->n = $map['N'];
        }

        if (isset($map['NegativePrompt'])) {
            $model->negativePrompt = $map['NegativePrompt'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['PromptExtend'])) {
            $model->promptExtend = $map['PromptExtend'];
        }

        if (isset($map['Seed'])) {
            $model->seed = $map['Seed'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Watermark'])) {
            $model->watermark = $map['Watermark'];
        }

        return $model;
    }
}
