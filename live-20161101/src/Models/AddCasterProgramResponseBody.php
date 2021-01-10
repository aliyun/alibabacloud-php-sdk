<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterProgramResponseBody\episodeIds;
use AlibabaCloud\Tea\Model;

class AddCasterProgramResponseBody extends Model
{
    /**
     * @var episodeIds
     */
    public $episodeIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'episodeIds' => 'EpisodeIds',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->episodeIds) {
            $res['EpisodeIds'] = null !== $this->episodeIds ? $this->episodeIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCasterProgramResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EpisodeIds'])) {
            $model->episodeIds = episodeIds::fromMap($map['EpisodeIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
