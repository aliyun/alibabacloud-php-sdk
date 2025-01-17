<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class MediaConvertMuxConfig extends Model
{
    /**
     * @var MediaConvertSegment
     */
    public $segment;
    protected $_name = [
        'segment' => 'Segment',
    ];

    public function validate()
    {
        if (null !== $this->segment) {
            $this->segment->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->segment) {
            $res['Segment'] = null !== $this->segment ? $this->segment->toArray($noStream) : $this->segment;
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
        if (isset($map['Segment'])) {
            $model->segment = MediaConvertSegment::fromMap($map['Segment']);
        }

        return $model;
    }
}
