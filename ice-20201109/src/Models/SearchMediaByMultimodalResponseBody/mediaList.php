<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByMultimodalResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByMultimodalResponseBody\mediaList\clipInfo;
use AlibabaCloud\Tea\Model;

class mediaList extends Model
{
    /**
     * @var clipInfo[]
     */
    public $clipInfo;

    /**
     * @example a18936e0e28771edb59ae6f6f47a****
     *
     * @var string
     */
    public $mediaId;
    protected $_name = [
        'clipInfo' => 'ClipInfo',
        'mediaId'  => 'MediaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clipInfo) {
            $res['ClipInfo'] = [];
            if (null !== $this->clipInfo && \is_array($this->clipInfo)) {
                $n = 0;
                foreach ($this->clipInfo as $item) {
                    $res['ClipInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClipInfo'])) {
            if (!empty($map['ClipInfo'])) {
                $model->clipInfo = [];
                $n               = 0;
                foreach ($map['ClipInfo'] as $item) {
                    $model->clipInfo[$n++] = null !== $item ? clipInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        return $model;
    }
}
