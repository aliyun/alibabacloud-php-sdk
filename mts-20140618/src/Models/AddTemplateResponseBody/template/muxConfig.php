<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\AddTemplateResponseBody\template;

use AlibabaCloud\SDK\Mts\V20140618\Models\AddTemplateResponseBody\template\muxConfig\gif;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddTemplateResponseBody\template\muxConfig\segment;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddTemplateResponseBody\template\muxConfig\webp;
use AlibabaCloud\Tea\Model;

class muxConfig extends Model
{
    /**
     * @var webp
     */
    public $webp;

    /**
     * @var gif
     */
    public $gif;

    /**
     * @var segment
     */
    public $segment;
    protected $_name = [
        'webp'    => 'Webp',
        'gif'     => 'Gif',
        'segment' => 'Segment',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->webp) {
            $res['Webp'] = null !== $this->webp ? $this->webp->toMap() : null;
        }
        if (null !== $this->gif) {
            $res['Gif'] = null !== $this->gif ? $this->gif->toMap() : null;
        }
        if (null !== $this->segment) {
            $res['Segment'] = null !== $this->segment ? $this->segment->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return muxConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Webp'])) {
            $model->webp = webp::fromMap($map['Webp']);
        }
        if (isset($map['Gif'])) {
            $model->gif = gif::fromMap($map['Gif']);
        }
        if (isset($map['Segment'])) {
            $model->segment = segment::fromMap($map['Segment']);
        }

        return $model;
    }
}
