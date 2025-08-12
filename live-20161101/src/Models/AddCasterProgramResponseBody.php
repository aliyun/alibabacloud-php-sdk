<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterProgramResponseBody\episodeIds;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->episodeIds) {
            $this->episodeIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->episodeIds) {
            $res['EpisodeIds'] = null !== $this->episodeIds ? $this->episodeIds->toArray($noStream) : $this->episodeIds;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['EpisodeIds'])) {
            $model->episodeIds = episodeIds::fromMap($map['EpisodeIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
