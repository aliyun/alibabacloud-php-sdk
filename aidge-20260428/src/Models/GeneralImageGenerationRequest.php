<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class GeneralImageGenerationRequest extends Model
{
    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $n;

    /**
     * @var string
     */
    public $operation;

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
     * @var string[]
     */
    public $referenceUrl;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var bool
     */
    public $watermark;
    protected $_name = [
        'jobType' => 'JobType',
        'mode' => 'Mode',
        'n' => 'N',
        'operation' => 'Operation',
        'prompt' => 'Prompt',
        'promptExtend' => 'PromptExtend',
        'ratio' => 'Ratio',
        'referenceUrl' => 'ReferenceUrl',
        'resolution' => 'Resolution',
        'scene' => 'Scene',
        'watermark' => 'Watermark',
    ];

    public function validate()
    {
        if (\is_array($this->referenceUrl)) {
            Model::validateArray($this->referenceUrl);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->n) {
            $res['N'] = $this->n;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
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

        if (null !== $this->referenceUrl) {
            if (\is_array($this->referenceUrl)) {
                $res['ReferenceUrl'] = [];
                $n1 = 0;
                foreach ($this->referenceUrl as $item1) {
                    $res['ReferenceUrl'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
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
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['N'])) {
            $model->n = $map['N'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
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

        if (isset($map['ReferenceUrl'])) {
            if (!empty($map['ReferenceUrl'])) {
                $model->referenceUrl = [];
                $n1 = 0;
                foreach ($map['ReferenceUrl'] as $item1) {
                    $model->referenceUrl[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        if (isset($map['Watermark'])) {
            $model->watermark = $map['Watermark'];
        }

        return $model;
    }
}
