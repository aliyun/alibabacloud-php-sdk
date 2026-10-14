<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\CreateVideoTaskRequest\media;

class CreateVideoTaskRequest extends Model
{
    /**
     * @var media[]
     */
    public $media;

    /**
     * @var bool
     */
    public $audio;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var bool
     */
    public $promptExtend;

    /**
     * @var string
     */
    public $ratio;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var int
     */
    public $seed;

    /**
     * @var bool
     */
    public $watermark;
    protected $_name = [
        'media' => 'Media',
        'audio' => 'Audio',
        'clientToken' => 'ClientToken',
        'duration' => 'Duration',
        'model' => 'Model',
        'prompt' => 'Prompt',
        'promptExtend' => 'PromptExtend',
        'ratio' => 'Ratio',
        'resolution' => 'Resolution',
        'seed' => 'Seed',
        'watermark' => 'Watermark',
    ];

    public function validate()
    {
        if (\is_array($this->media)) {
            Model::validateArray($this->media);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->media) {
            if (\is_array($this->media)) {
                $res['Media'] = [];
                $n1 = 0;
                foreach ($this->media as $item1) {
                    $res['Media'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->audio) {
            $res['Audio'] = $this->audio;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->promptExtend) {
            $res['PromptExtend'] = $this->promptExtend;
        }

        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }

        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }

        if (null !== $this->seed) {
            $res['Seed'] = $this->seed;
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
        if (isset($map['Media'])) {
            if (!empty($map['Media'])) {
                $model->media = [];
                $n1 = 0;
                foreach ($map['Media'] as $item1) {
                    $model->media[$n1] = media::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Audio'])) {
            $model->audio = $map['Audio'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['PromptExtend'])) {
            $model->promptExtend = $map['PromptExtend'];
        }

        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }

        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }

        if (isset($map['Seed'])) {
            $model->seed = $map['Seed'];
        }

        if (isset($map['Watermark'])) {
            $model->watermark = $map['Watermark'];
        }

        return $model;
    }
}
