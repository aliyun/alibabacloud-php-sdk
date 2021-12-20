<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutLiveChannelRequest extends Model
{
    /**
     * @var LiveChannelConfiguration
     */
    public $liveChannelConfiguration;
    protected $_name = [
        'liveChannelConfiguration' => 'LiveChannelConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveChannelConfiguration) {
            $res['LiveChannelConfiguration'] = null !== $this->liveChannelConfiguration ? $this->liveChannelConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutLiveChannelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveChannelConfiguration'])) {
            $model->liveChannelConfiguration = LiveChannelConfiguration::fromMap($map['LiveChannelConfiguration']);
        }

        return $model;
    }
}
