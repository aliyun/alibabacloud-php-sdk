<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceResponseBody\mediaClipList\occurrencesInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceResponseBody\mediaClipList\occurrencesInfos\trackData\boxPosition;

class trackData extends Model
{
    /**
     * @var boxPosition
     */
    public $boxPosition;
    /**
     * @var float
     */
    public $timestamp;
    protected $_name = [
        'boxPosition' => 'BoxPosition',
        'timestamp'   => 'Timestamp',
    ];

    public function validate()
    {
        if (null !== $this->boxPosition) {
            $this->boxPosition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boxPosition) {
            $res['BoxPosition'] = null !== $this->boxPosition ? $this->boxPosition->toArray($noStream) : $this->boxPosition;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['BoxPosition'])) {
            $model->boxPosition = boxPosition::fromMap($map['BoxPosition']);
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
