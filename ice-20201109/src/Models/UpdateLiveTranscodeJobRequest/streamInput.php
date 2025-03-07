<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeJobRequest;

use AlibabaCloud\Tea\Model;

class streamInput extends Model
{
    /**
     * @description The URL of the input stream.
     *
     * This parameter is required.
     * @example rtmp://mydomain/app/stream1
     *
     * @var string
     */
    public $inputUrl;

    /**
     * @description The type of the input stream. The value can only be rtmp.
     *
     * This parameter is required.
     * @example rtmp
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'inputUrl' => 'InputUrl',
        'type'     => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['InputUrl'])) {
            $model->inputUrl = $map['InputUrl'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
