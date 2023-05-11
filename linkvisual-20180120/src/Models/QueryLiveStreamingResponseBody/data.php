<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryLiveStreamingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example rtmp://47.100.***.***:8000/live?token=dc1****120ce394ef94974/Eb****6RBe8l4_0
     *
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $relayDecryptKey;

    /**
     * @var string
     */
    public $stunInfo;
    protected $_name = [
        'path'            => 'Path',
        'relayDecryptKey' => 'RelayDecryptKey',
        'stunInfo'        => 'StunInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->relayDecryptKey) {
            $res['RelayDecryptKey'] = $this->relayDecryptKey;
        }
        if (null !== $this->stunInfo) {
            $res['StunInfo'] = $this->stunInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['RelayDecryptKey'])) {
            $model->relayDecryptKey = $map['RelayDecryptKey'];
        }
        if (isset($map['StunInfo'])) {
            $model->stunInfo = $map['StunInfo'];
        }

        return $model;
    }
}
