<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoDetectShotTaskResponseBody\data\payload\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoDetectShotTaskResponseBody\data\payload\output\videoSplitResult\videoRecognitionResult;

class videoSplitResult extends Model
{
    /**
     * @var string
     */
    public $reasonText;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string[][]
     */
    public $videoParts;

    /**
     * @var videoRecognitionResult[]
     */
    public $videoRecognitionResult;
    protected $_name = [
        'reasonText' => 'reasonText',
        'text' => 'text',
        'videoParts' => 'videoParts',
        'videoRecognitionResult' => 'videoRecognitionResult',
    ];

    public function validate()
    {
        if (\is_array($this->videoParts)) {
            Model::validateArray($this->videoParts);
        }
        if (\is_array($this->videoRecognitionResult)) {
            Model::validateArray($this->videoRecognitionResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reasonText) {
            $res['reasonText'] = $this->reasonText;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->videoParts) {
            if (\is_array($this->videoParts)) {
                $res['videoParts'] = [];
                $n1 = 0;
                foreach ($this->videoParts as $item1) {
                    if (\is_array($item1)) {
                        $res['videoParts'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['videoParts'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->videoRecognitionResult) {
            if (\is_array($this->videoRecognitionResult)) {
                $res['videoRecognitionResult'] = [];
                $n1 = 0;
                foreach ($this->videoRecognitionResult as $item1) {
                    $res['videoRecognitionResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['reasonText'])) {
            $model->reasonText = $map['reasonText'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['videoParts'])) {
            if (!empty($map['videoParts'])) {
                $model->videoParts = [];
                $n1 = 0;
                foreach ($map['videoParts'] as $item1) {
                    if (!empty($item1)) {
                        $model->videoParts[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->videoParts[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['videoRecognitionResult'])) {
            if (!empty($map['videoRecognitionResult'])) {
                $model->videoRecognitionResult = [];
                $n1 = 0;
                foreach ($map['videoRecognitionResult'] as $item1) {
                    $model->videoRecognitionResult[$n1] = videoRecognitionResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
