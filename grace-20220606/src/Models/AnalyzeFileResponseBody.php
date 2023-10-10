<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Grace\V20220606\Models;

use AlibabaCloud\Tea\Model;

class AnalyzeFileResponseBody extends Model
{
    /**
     * @example 207076258906603549-1667270208299-heap_dump_11.195.186.232_1667269965442.bin
     *
     * @var string
     */
    public $fileName;

    /**
     * @example B14EC7CC-5181-582F-8EB7-6DB142FB529F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fileName'  => 'fileName',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AnalyzeFileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
