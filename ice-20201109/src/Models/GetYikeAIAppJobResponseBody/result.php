<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetYikeAIAppJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetYikeAIAppJobResponseBody\result\audioResult;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetYikeAIAppJobResponseBody\result\imageResult;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetYikeAIAppJobResponseBody\result\videoResult;

class result extends Model
{
    /**
     * @var audioResult[]
     */
    public $audioResult;

    /**
     * @var imageResult[]
     */
    public $imageResult;

    /**
     * @var videoResult[]
     */
    public $videoResult;
    protected $_name = [
        'audioResult' => 'AudioResult',
        'imageResult' => 'ImageResult',
        'videoResult' => 'VideoResult',
    ];

    public function validate()
    {
        if (\is_array($this->audioResult)) {
            Model::validateArray($this->audioResult);
        }
        if (\is_array($this->imageResult)) {
            Model::validateArray($this->imageResult);
        }
        if (\is_array($this->videoResult)) {
            Model::validateArray($this->videoResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioResult) {
            if (\is_array($this->audioResult)) {
                $res['AudioResult'] = [];
                $n1 = 0;
                foreach ($this->audioResult as $item1) {
                    $res['AudioResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageResult) {
            if (\is_array($this->imageResult)) {
                $res['ImageResult'] = [];
                $n1 = 0;
                foreach ($this->imageResult as $item1) {
                    $res['ImageResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->videoResult) {
            if (\is_array($this->videoResult)) {
                $res['VideoResult'] = [];
                $n1 = 0;
                foreach ($this->videoResult as $item1) {
                    $res['VideoResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AudioResult'])) {
            if (!empty($map['AudioResult'])) {
                $model->audioResult = [];
                $n1 = 0;
                foreach ($map['AudioResult'] as $item1) {
                    $model->audioResult[$n1] = audioResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageResult'])) {
            if (!empty($map['ImageResult'])) {
                $model->imageResult = [];
                $n1 = 0;
                foreach ($map['ImageResult'] as $item1) {
                    $model->imageResult[$n1] = imageResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VideoResult'])) {
            if (!empty($map['VideoResult'])) {
                $model->videoResult = [];
                $n1 = 0;
                foreach ($map['VideoResult'] as $item1) {
                    $model->videoResult[$n1] = videoResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
