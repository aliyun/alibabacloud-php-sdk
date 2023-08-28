<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\AudioPreviewPlayInfo\meta;
use AlibabaCloud\SDK\Pds\V20220301\Models\AudioPreviewPlayInfo\offlineAudioList;
use AlibabaCloud\Tea\Model;

class AudioPreviewPlayInfo extends Model
{
    /**
     * @var meta
     */
    public $meta;

    /**
     * @var offlineAudioList[]
     */
    public $offlineAudioList;
    protected $_name = [
        'meta'             => 'meta',
        'offlineAudioList' => 'offline_audio_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->meta) {
            $res['meta'] = null !== $this->meta ? $this->meta->toMap() : null;
        }
        if (null !== $this->offlineAudioList) {
            $res['offline_audio_list'] = [];
            if (null !== $this->offlineAudioList && \is_array($this->offlineAudioList)) {
                $n = 0;
                foreach ($this->offlineAudioList as $item) {
                    $res['offline_audio_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AudioPreviewPlayInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['meta'])) {
            $model->meta = meta::fromMap($map['meta']);
        }
        if (isset($map['offline_audio_list'])) {
            if (!empty($map['offline_audio_list'])) {
                $model->offlineAudioList = [];
                $n                       = 0;
                foreach ($map['offline_audio_list'] as $item) {
                    $model->offlineAudioList[$n++] = null !== $item ? offlineAudioList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
