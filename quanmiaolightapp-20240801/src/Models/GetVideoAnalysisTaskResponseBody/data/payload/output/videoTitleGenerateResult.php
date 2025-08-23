<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoTitleGenerateResult\usage;

class videoTitleGenerateResult extends Model
{
    /**
     * @var bool
     */
    public $generateFinished;

    /**
     * @var string
     */
    public $text;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'generateFinished' => 'generateFinished',
        'text' => 'text',
        'usage' => 'usage',
    ];

    public function validate()
    {
        if (null !== $this->usage) {
            $this->usage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->generateFinished) {
            $res['generateFinished'] = $this->generateFinished;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
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
        if (isset($map['generateFinished'])) {
            $model->generateFinished = $map['generateFinished'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['usage'])) {
            $model->usage = usage::fromMap($map['usage']);
        }

        return $model;
    }
}
