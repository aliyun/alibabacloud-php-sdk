<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\AddCasterProgramResponse\episodeIds;

use AlibabaCloud\Tea\Model;

class episodeId extends Model
{
    /**
     * @var string
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
            $res['EpisodeId'] = $this->episodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return episodeId
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EpisodeId'])) {
            $model->episodeId = $map['EpisodeId'];
        }

        return $model;
    }
}
