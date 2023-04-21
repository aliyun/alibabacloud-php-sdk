<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceResponseBody\mediaClipList\occurrencesInfos;

use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceResponseBody\mediaClipList\occurrencesInfos\trackData\boxPosition;
use AlibabaCloud\Tea\Model;

class trackData extends Model
{
    /**
     * @var boxPosition
     */
    public $boxPosition;

    /**
     * @example 62.03302
     *
     * @var float
     */
    public $timestamp;
    protected $_name = [
        'boxPosition' => 'BoxPosition',
        'timestamp'   => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boxPosition) {
            $res['BoxPosition'] = null !== $this->boxPosition ? $this->boxPosition->toMap() : null;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trackData
     */
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
