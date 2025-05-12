<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListByURLResponseBody\mediaList\media;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListByURLResponseBody\mediaList\media\mediaInfo\format;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListByURLResponseBody\mediaList\media\mediaInfo\streams;

class mediaInfo extends Model
{
    /**
     * @var format
     */
    public $format;

    /**
     * @var streams
     */
    public $streams;
    protected $_name = [
        'format' => 'Format',
        'streams' => 'Streams',
    ];

    public function validate()
    {
        if (null !== $this->format) {
            $this->format->validate();
        }
        if (null !== $this->streams) {
            $this->streams->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->format) {
            $res['Format'] = null !== $this->format ? $this->format->toArray($noStream) : $this->format;
        }

        if (null !== $this->streams) {
            $res['Streams'] = null !== $this->streams ? $this->streams->toArray($noStream) : $this->streams;
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
        if (isset($map['Format'])) {
            $model->format = format::fromMap($map['Format']);
        }

        if (isset($map['Streams'])) {
            $model->streams = streams::fromMap($map['Streams']);
        }

        return $model;
    }
}
