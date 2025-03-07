<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateAdInsertionResponseBody\config;

use AlibabaCloud\Tea\Model;

class manifestEndpointConfig extends Model
{
    /**
     * @description The prefix of the playback endpoint for HLS manifests.
     *
     * @var string
     */
    public $hlsPrefix;
    protected $_name = [
        'hlsPrefix' => 'HlsPrefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hlsPrefix) {
            $res['HlsPrefix'] = $this->hlsPrefix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return manifestEndpointConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HlsPrefix'])) {
            $model->hlsPrefix = $map['HlsPrefix'];
        }

        return $model;
    }
}
