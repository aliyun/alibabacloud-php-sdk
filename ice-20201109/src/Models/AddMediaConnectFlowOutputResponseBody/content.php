<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AddMediaConnectFlowOutputResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The output URL.
     *
     * @example srt://1.2.3.4:1025
     *
     * @var string
     */
    public $outputUrl;
    protected $_name = [
        'outputUrl' => 'OutputUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputUrl) {
            $res['OutputUrl'] = $this->outputUrl;
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
        if (isset($map['OutputUrl'])) {
            $model->outputUrl = $map['OutputUrl'];
        }

        return $model;
    }
}
