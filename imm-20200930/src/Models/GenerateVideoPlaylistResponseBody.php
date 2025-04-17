<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistResponseBody\audioPlaylist;
use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistResponseBody\subtitlePlaylist;
use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistResponseBody\videoPlaylist;

class GenerateVideoPlaylistResponseBody extends Model
{
    /**
     * @var audioPlaylist[]
     */
    public $audioPlaylist;

    /**
     * @var float
     */
    public $duration;

    /**
     * @var string
     */
    public $masterURI;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var subtitlePlaylist[]
     */
    public $subtitlePlaylist;

    /**
     * @var string
     */
    public $token;

    /**
     * @var videoPlaylist[]
     */
    public $videoPlaylist;
    protected $_name = [
        'audioPlaylist' => 'AudioPlaylist',
        'duration' => 'Duration',
        'masterURI' => 'MasterURI',
        'requestId' => 'RequestId',
        'subtitlePlaylist' => 'SubtitlePlaylist',
        'token' => 'Token',
        'videoPlaylist' => 'VideoPlaylist',
    ];

    public function validate()
    {
        if (\is_array($this->audioPlaylist)) {
            Model::validateArray($this->audioPlaylist);
        }
        if (\is_array($this->subtitlePlaylist)) {
            Model::validateArray($this->subtitlePlaylist);
        }
        if (\is_array($this->videoPlaylist)) {
            Model::validateArray($this->videoPlaylist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioPlaylist) {
            if (\is_array($this->audioPlaylist)) {
                $res['AudioPlaylist'] = [];
                $n1 = 0;
                foreach ($this->audioPlaylist as $item1) {
                    $res['AudioPlaylist'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->masterURI) {
            $res['MasterURI'] = $this->masterURI;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->subtitlePlaylist) {
            if (\is_array($this->subtitlePlaylist)) {
                $res['SubtitlePlaylist'] = [];
                $n1 = 0;
                foreach ($this->subtitlePlaylist as $item1) {
                    $res['SubtitlePlaylist'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        if (null !== $this->videoPlaylist) {
            if (\is_array($this->videoPlaylist)) {
                $res['VideoPlaylist'] = [];
                $n1 = 0;
                foreach ($this->videoPlaylist as $item1) {
                    $res['VideoPlaylist'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AudioPlaylist'])) {
            if (!empty($map['AudioPlaylist'])) {
                $model->audioPlaylist = [];
                $n1 = 0;
                foreach ($map['AudioPlaylist'] as $item1) {
                    $model->audioPlaylist[$n1++] = audioPlaylist::fromMap($item1);
                }
            }
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['MasterURI'])) {
            $model->masterURI = $map['MasterURI'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SubtitlePlaylist'])) {
            if (!empty($map['SubtitlePlaylist'])) {
                $model->subtitlePlaylist = [];
                $n1 = 0;
                foreach ($map['SubtitlePlaylist'] as $item1) {
                    $model->subtitlePlaylist[$n1++] = subtitlePlaylist::fromMap($item1);
                }
            }
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        if (isset($map['VideoPlaylist'])) {
            if (!empty($map['VideoPlaylist'])) {
                $model->videoPlaylist = [];
                $n1 = 0;
                foreach ($map['VideoPlaylist'] as $item1) {
                    $model->videoPlaylist[$n1++] = videoPlaylist::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
