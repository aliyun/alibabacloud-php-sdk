<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddCasterEpisodeResponseBody extends Model
{
    /**
     * @description The ID of the episode. You can use the ID as a request parameter in the API operation that is used to query the information about the episode list, modify the configurations of the episode, and delete the episode.
     *
     * @example 21926b36-7dd2-4fde-ae25-51b5bc8e****
     *
     * @var string
     */
    public $episodeId;

    /**
     * @description The request ID.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'episodeId' => 'EpisodeId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->episodeId) {
            $res['EpisodeId'] = $this->episodeId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCasterEpisodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EpisodeId'])) {
            $model->episodeId = $map['EpisodeId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
