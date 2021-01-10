<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults\mediaDetailRecgResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults\mediaDetailRecgResult\frameTagInfos\frameTagInfo;
use AlibabaCloud\Tea\Model;

class frameTagInfos extends Model
{
    /**
     * @var frameTagInfo[]
     */
    public $frameTagInfo;
    protected $_name = [
        'frameTagInfo' => 'FrameTagInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frameTagInfo) {
            $res['FrameTagInfo'] = [];
            if (null !== $this->frameTagInfo && \is_array($this->frameTagInfo)) {
                $n = 0;
                foreach ($this->frameTagInfo as $item) {
                    $res['FrameTagInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frameTagInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FrameTagInfo'])) {
            if (!empty($map['FrameTagInfo'])) {
                $model->frameTagInfo = [];
                $n                   = 0;
                foreach ($map['FrameTagInfo'] as $item) {
                    $model->frameTagInfo[$n++] = null !== $item ? frameTagInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
