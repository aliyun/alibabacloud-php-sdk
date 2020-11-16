<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\AddCasterProgramResponse;

use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterProgramResponse\episodeIds\episodeId;
use AlibabaCloud\Tea\Model;

class episodeIds extends Model
{
    /**
     * @var episodeId[]
     */
    public $episodeId;
    protected $_name = [
        'episodeId' => 'EpisodeId',
    ];

    public function validate()
    {
        Model::validateRequired('episodeId', $this->episodeId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->episodeId) {
            $res['EpisodeId'] = [];
            if (null !== $this->episodeId && \is_array($this->episodeId)) {
                $n = 0;
                foreach ($this->episodeId as $item) {
                    $res['EpisodeId'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return episodeIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EpisodeId'])) {
            if (!empty($map['EpisodeId'])) {
                $model->episodeId = [];
                $n                = 0;
                foreach ($map['EpisodeId'] as $item) {
                    $model->episodeId[$n++] = null !== $item ? episodeId::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
