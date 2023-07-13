<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\UpdateEdgeInstanceChannelRequest;

use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @example {"protocol":"TCP", "ip":"1.2.3.4", "port":122}
     *
     * @var string
     */
    public $content;

    /**
     * @example JSON
     *
     * @var string
     */
    public $format;

    /**
     * @example key1
     *
     * @var string
     */
    public $key;
    protected $_name = [
        'content' => 'Content',
        'format'  => 'Format',
        'key'     => 'Key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
