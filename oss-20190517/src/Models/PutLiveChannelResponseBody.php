<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutLiveChannelResponseBody extends Model
{
    /**
     * @var LiveChannelPlayUrls
     */
    public $playUrls;

    /**
     * @var LiveChannelPublishUrls
     */
    public $publishUrls;
    protected $_name = [
        'playUrls'    => 'PlayUrls',
        'publishUrls' => 'PublishUrls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playUrls) {
            $res['PlayUrls'] = null !== $this->playUrls ? $this->playUrls->toMap() : null;
        }
        if (null !== $this->publishUrls) {
            $res['PublishUrls'] = null !== $this->publishUrls ? $this->publishUrls->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutLiveChannelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlayUrls'])) {
            $model->playUrls = LiveChannelPlayUrls::fromMap($map['PlayUrls']);
        }
        if (isset($map['PublishUrls'])) {
            $model->publishUrls = LiveChannelPublishUrls::fromMap($map['PublishUrls']);
        }

        return $model;
    }
}
