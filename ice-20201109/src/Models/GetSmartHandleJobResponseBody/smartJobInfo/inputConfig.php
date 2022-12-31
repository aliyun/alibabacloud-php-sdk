<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponseBody\smartJobInfo;

use AlibabaCloud\Tea\Model;

class inputConfig extends Model
{
    /**
     * @example oss://example-bucket.oss-cn-shanghai.aliyuncs.com/example.mp4 或 ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $inputFile;
    protected $_name = [
        'inputFile' => 'InputFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputFile) {
            $res['InputFile'] = $this->inputFile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputFile'])) {
            $model->inputFile = $map['InputFile'];
        }

        return $model;
    }
}
