<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAISubtitleResponseBody\subtitleConfigs;

class DescribeLiveAISubtitleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var subtitleConfigs
     */
    public $subtitleConfigs;
    protected $_name = [
        'requestId' => 'RequestId',
        'subtitleConfigs' => 'SubtitleConfigs',
    ];

    public function validate()
    {
        if (null !== $this->subtitleConfigs) {
            $this->subtitleConfigs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->subtitleConfigs) {
            $res['SubtitleConfigs'] = null !== $this->subtitleConfigs ? $this->subtitleConfigs->toArray($noStream) : $this->subtitleConfigs;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SubtitleConfigs'])) {
            $model->subtitleConfigs = subtitleConfigs::fromMap($map['SubtitleConfigs']);
        }

        return $model;
    }
}
