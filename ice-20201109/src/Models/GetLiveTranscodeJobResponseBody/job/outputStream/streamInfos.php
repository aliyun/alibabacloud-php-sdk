<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeJobResponseBody\job\outputStream;

use AlibabaCloud\Tea\Model;

class streamInfos extends Model
{
    /**
     * @var string
     */
    public $outputUrl;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'outputUrl' => 'OutputUrl',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputUrl) {
            $res['OutputUrl'] = $this->outputUrl;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputUrl'])) {
            $model->outputUrl = $map['OutputUrl'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
