<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponseBody\playInfoList\playInfo;
use AlibabaCloud\Tea\Model;

class playInfoList extends Model
{
    /**
     * @var playInfo[]
     */
    public $playInfo;
    protected $_name = [
        'playInfo' => 'PlayInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->playInfo) {
            $res['PlayInfo'] = [];
            if (null !== $this->playInfo && \is_array($this->playInfo)) {
                $n = 0;
                foreach ($this->playInfo as $item) {
                    $res['PlayInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlayInfo'])) {
            if (!empty($map['PlayInfo'])) {
                $model->playInfo = [];
                $n = 0;
                foreach ($map['PlayInfo'] as $item) {
                    $model->playInfo[$n++] = null !== $item ? playInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
