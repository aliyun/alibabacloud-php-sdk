<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\AddCasterProgramResponseBody\episodeIds;

use AlibabaCloud\Tea\Model;

class episodeId extends Model
{
    /**
     * @description The ID of the episode. You can use the ID as a request parameter in the API operation that is used to modify the episode list, query the information about the episode list, delete the episode, or modify the configurations of the episode.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F****
     *
     * @var string
     */
    public $episodeId;
    protected $_name = [
        'episodeId' => 'EpisodeId',
    ];

    public function validate() {}

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
