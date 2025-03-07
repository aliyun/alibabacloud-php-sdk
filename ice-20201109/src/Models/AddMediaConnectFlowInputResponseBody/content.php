<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AddMediaConnectFlowInputResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The source URL.
     *
     * @example rtmp://1.2.3.4:1935/live/AliTestInput_8666ec062190f00e263012666319a5be
     *
     * @var string
     */
    public $inputUrl;
    protected $_name = [
        'inputUrl' => 'InputUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputUrl) {
            $res['InputUrl'] = $this->inputUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputUrl'])) {
            $model->inputUrl = $map['InputUrl'];
        }

        return $model;
    }
}
