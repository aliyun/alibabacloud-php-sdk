<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterProgramResponse\episodeIds;
use AlibabaCloud\Tea\Model;

class AddCasterProgramResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var episodeIds
     */
    public $episodeIds;
    protected $_name = [
        'requestId'  => 'RequestId',
        'episodeIds' => 'EpisodeIds',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('episodeIds', $this->episodeIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->episodeIds) {
            $res['EpisodeIds'] = null !== $this->episodeIds ? $this->episodeIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCasterProgramResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EpisodeIds'])) {
            $model->episodeIds = episodeIds::fromMap($map['EpisodeIds']);
        }

        return $model;
    }
}
