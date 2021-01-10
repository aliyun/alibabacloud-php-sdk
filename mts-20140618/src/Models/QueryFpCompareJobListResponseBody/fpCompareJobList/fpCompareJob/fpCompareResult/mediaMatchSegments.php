<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList\fpCompareJob\fpCompareResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList\fpCompareJob\fpCompareResult\mediaMatchSegments\mediaMatchSegment;
use AlibabaCloud\Tea\Model;

class mediaMatchSegments extends Model
{
    /**
     * @var mediaMatchSegment[]
     */
    public $mediaMatchSegment;
    protected $_name = [
        'mediaMatchSegment' => 'MediaMatchSegment',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaMatchSegment) {
            $res['MediaMatchSegment'] = [];
            if (null !== $this->mediaMatchSegment && \is_array($this->mediaMatchSegment)) {
                $n = 0;
                foreach ($this->mediaMatchSegment as $item) {
                    $res['MediaMatchSegment'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaMatchSegments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaMatchSegment'])) {
            if (!empty($map['MediaMatchSegment'])) {
                $model->mediaMatchSegment = [];
                $n                        = 0;
                foreach ($map['MediaMatchSegment'] as $item) {
                    $model->mediaMatchSegment[$n++] = null !== $item ? mediaMatchSegment::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
