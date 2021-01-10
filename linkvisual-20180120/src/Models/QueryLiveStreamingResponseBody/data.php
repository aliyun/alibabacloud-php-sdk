<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryLiveStreamingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $decryptKey;
    protected $_name = [
        'path'       => 'Path',
        'decryptKey' => 'DecryptKey',
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
        if (null !== $this->decryptKey) {
            $res['DecryptKey'] = $this->decryptKey;
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
        if (isset($map['DecryptKey'])) {
            $model->decryptKey = $map['DecryptKey'];
        }

        return $model;
    }
}
