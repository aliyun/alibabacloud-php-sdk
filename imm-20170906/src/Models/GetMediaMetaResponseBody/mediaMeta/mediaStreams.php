<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponseBody\mediaMeta;

use AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponseBody\mediaMeta\mediaStreams\audioStreams;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponseBody\mediaMeta\mediaStreams\subtitleStreams;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponseBody\mediaMeta\mediaStreams\videoStreams;
use AlibabaCloud\Tea\Model;

class mediaStreams extends Model
{
    /**
     * @var audioStreams[]
     */
    public $audioStreams;

    /**
     * @var subtitleStreams[]
     */
    public $subtitleStreams;

    /**
     * @var videoStreams[]
     */
    public $videoStreams;
    protected $_name = [
        'audioStreams'    => 'AudioStreams',
        'subtitleStreams' => 'SubtitleStreams',
        'videoStreams'    => 'VideoStreams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioStreams) {
            $res['AudioStreams'] = [];
            if (null !== $this->audioStreams && \is_array($this->audioStreams)) {
                $n = 0;
                foreach ($this->audioStreams as $item) {
                    $res['AudioStreams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subtitleStreams) {
            $res['SubtitleStreams'] = [];
            if (null !== $this->subtitleStreams && \is_array($this->subtitleStreams)) {
                $n = 0;
                foreach ($this->subtitleStreams as $item) {
                    $res['SubtitleStreams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->videoStreams) {
            $res['VideoStreams'] = [];
            if (null !== $this->videoStreams && \is_array($this->videoStreams)) {
                $n = 0;
                foreach ($this->videoStreams as $item) {
                    $res['VideoStreams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaStreams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioStreams'])) {
            if (!empty($map['AudioStreams'])) {
                $model->audioStreams = [];
                $n                   = 0;
                foreach ($map['AudioStreams'] as $item) {
                    $model->audioStreams[$n++] = null !== $item ? audioStreams::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SubtitleStreams'])) {
            if (!empty($map['SubtitleStreams'])) {
                $model->subtitleStreams = [];
                $n                      = 0;
                foreach ($map['SubtitleStreams'] as $item) {
                    $model->subtitleStreams[$n++] = null !== $item ? subtitleStreams::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VideoStreams'])) {
            if (!empty($map['VideoStreams'])) {
                $model->videoStreams = [];
                $n                   = 0;
                foreach ($map['VideoStreams'] as $item) {
                    $model->videoStreams[$n++] = null !== $item ? videoStreams::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
