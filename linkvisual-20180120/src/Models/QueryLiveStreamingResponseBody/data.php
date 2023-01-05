<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryLiveStreamingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example {"iv": "MDEy****OTo7PD0+Pw==","key": "eA2r****fHjOmnyBfQ=="}
     *
     * @var string
     */
    public $decryptKey;

    /**
     * @example rtmp://47.100.***.***:8000/live?token=dc1****120ce394ef94974/Eb****6RBe8l4_0
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'decryptKey' => 'DecryptKey',
        'path'       => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->decryptKey) {
            $res['DecryptKey'] = $this->decryptKey;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
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
        if (isset($map['DecryptKey'])) {
            $model->decryptKey = $map['DecryptKey'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
