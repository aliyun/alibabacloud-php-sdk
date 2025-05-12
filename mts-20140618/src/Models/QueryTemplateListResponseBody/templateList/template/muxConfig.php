<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryTemplateListResponseBody\templateList\template;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTemplateListResponseBody\templateList\template\muxConfig\gif;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTemplateListResponseBody\templateList\template\muxConfig\segment;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTemplateListResponseBody\templateList\template\muxConfig\webp;

class muxConfig extends Model
{
    /**
     * @var gif
     */
    public $gif;

    /**
     * @var segment
     */
    public $segment;

    /**
     * @var webp
     */
    public $webp;
    protected $_name = [
        'gif' => 'Gif',
        'segment' => 'Segment',
        'webp' => 'Webp',
    ];

    public function validate()
    {
        if (null !== $this->gif) {
            $this->gif->validate();
        }
        if (null !== $this->segment) {
            $this->segment->validate();
        }
        if (null !== $this->webp) {
            $this->webp->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gif) {
            $res['Gif'] = null !== $this->gif ? $this->gif->toArray($noStream) : $this->gif;
        }

        if (null !== $this->segment) {
            $res['Segment'] = null !== $this->segment ? $this->segment->toArray($noStream) : $this->segment;
        }

        if (null !== $this->webp) {
            $res['Webp'] = null !== $this->webp ? $this->webp->toArray($noStream) : $this->webp;
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
        if (isset($map['Gif'])) {
            $model->gif = gif::fromMap($map['Gif']);
        }

        if (isset($map['Segment'])) {
            $model->segment = segment::fromMap($map['Segment']);
        }

        if (isset($map['Webp'])) {
            $model->webp = webp::fromMap($map['Webp']);
        }

        return $model;
    }
}
