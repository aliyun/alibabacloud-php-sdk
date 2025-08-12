<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class ModifyCasterEpisodeResponseBody extends Model
{
    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $episodeId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'casterId' => 'CasterId',
        'episodeId' => 'EpisodeId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }

        if (null !== $this->episodeId) {
            $res['EpisodeId'] = $this->episodeId;
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
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }

        if (isset($map['EpisodeId'])) {
            $model->episodeId = $map['EpisodeId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
