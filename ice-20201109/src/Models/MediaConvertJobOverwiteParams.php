<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertJobOverwiteParams\subtitles;

class MediaConvertJobOverwiteParams extends Model
{
    /**
     * @var subtitles[]
     */
    public $subtitles;
    protected $_name = [
        'subtitles' => 'Subtitles',
    ];

    public function validate()
    {
        if (\is_array($this->subtitles)) {
            Model::validateArray($this->subtitles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subtitles) {
            if (\is_array($this->subtitles)) {
                $res['Subtitles'] = [];
                $n1 = 0;
                foreach ($this->subtitles as $item1) {
                    $res['Subtitles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Subtitles'])) {
            if (!empty($map['Subtitles'])) {
                $model->subtitles = [];
                $n1 = 0;
                foreach ($map['Subtitles'] as $item1) {
                    $model->subtitles[$n1] = subtitles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
