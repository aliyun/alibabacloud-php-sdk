<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ots\V20160620\Models\GetInstanceResponseBody\instanceInfo;

use AlibabaCloud\SDK\Ots\V20160620\Models\GetInstanceResponseBody\instanceInfo\tagInfos\tagInfo;
use AlibabaCloud\Tea\Model;

class tagInfos extends Model
{
    /**
     * @var tagInfo[]
     */
    public $tagInfo;
    protected $_name = [
        'tagInfo' => 'TagInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagInfo) {
            $res['TagInfo'] = [];
            if (null !== $this->tagInfo && \is_array($this->tagInfo)) {
                $n = 0;
                foreach ($this->tagInfo as $item) {
                    $res['TagInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagInfo'])) {
            if (!empty($map['TagInfo'])) {
                $model->tagInfo = [];
                $n              = 0;
                foreach ($map['TagInfo'] as $item) {
                    $model->tagInfo[$n++] = null !== $item ? tagInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
