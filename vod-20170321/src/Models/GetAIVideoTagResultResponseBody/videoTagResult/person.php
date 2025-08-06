<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponseBody\videoTagResult;

use AlibabaCloud\Dara\Model;

class person extends Model
{
    /**
     * @var string
     */
    public $faceUrl;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string[]
     */
    public $times;
    protected $_name = [
        'faceUrl' => 'FaceUrl',
        'tag' => 'Tag',
        'times' => 'Times',
    ];

    public function validate()
    {
        if (\is_array($this->times)) {
            Model::validateArray($this->times);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceUrl) {
            $res['FaceUrl'] = $this->faceUrl;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->times) {
            if (\is_array($this->times)) {
                $res['Times'] = [];
                $n1 = 0;
                foreach ($this->times as $item1) {
                    $res['Times'][$n1] = $item1;
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
        if (isset($map['FaceUrl'])) {
            $model->faceUrl = $map['FaceUrl'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['Times'])) {
            if (!empty($map['Times'])) {
                $model->times = [];
                $n1 = 0;
                foreach ($map['Times'] as $item1) {
                    $model->times[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
