<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoCaptionResult\videoCaptions;

class videoCaptionResult extends Model
{
    /**
     * @var bool
     */
    public $generateFinished;

    /**
     * @var videoCaptions[]
     */
    public $videoCaptions;
    protected $_name = [
        'generateFinished' => 'generateFinished',
        'videoCaptions' => 'videoCaptions',
    ];

    public function validate()
    {
        if (\is_array($this->videoCaptions)) {
            Model::validateArray($this->videoCaptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->generateFinished) {
            $res['generateFinished'] = $this->generateFinished;
        }

        if (null !== $this->videoCaptions) {
            if (\is_array($this->videoCaptions)) {
                $res['videoCaptions'] = [];
                $n1 = 0;
                foreach ($this->videoCaptions as $item1) {
                    $res['videoCaptions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['generateFinished'])) {
            $model->generateFinished = $map['generateFinished'];
        }

        if (isset($map['videoCaptions'])) {
            if (!empty($map['videoCaptions'])) {
                $model->videoCaptions = [];
                $n1 = 0;
                foreach ($map['videoCaptions'] as $item1) {
                    $model->videoCaptions[$n1] = videoCaptions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
