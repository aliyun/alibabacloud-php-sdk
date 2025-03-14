<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveSnapshotJobResponseBody;

use AlibabaCloud\Tea\Model;

class streamInput extends Model
{
    /**
     * @description The type of the input stream. The value can only be rtmp.
     *
     * @example rtmp
     *
     * @var string
     */
    public $type;

    /**
     * @description The URL of the input stream.
     *
     * @example rtmp://www.aliyun.com/stream
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'type' => 'Type',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
