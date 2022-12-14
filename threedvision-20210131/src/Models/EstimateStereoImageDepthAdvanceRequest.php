<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Threedvision\V20210131\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class EstimateStereoImageDepthAdvanceRequest extends Model
{
    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xxxx/test/left.png
     *
     * @var Stream
     */
    public $leftImageURLObject;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xxxx/test/right.png
     *
     * @var Stream
     */
    public $rightImageURLObject;
    protected $_name = [
        'leftImageURLObject'  => 'LeftImageURL',
        'rightImageURLObject' => 'RightImageURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->leftImageURLObject) {
            $res['LeftImageURL'] = $this->leftImageURLObject;
        }
        if (null !== $this->rightImageURLObject) {
            $res['RightImageURL'] = $this->rightImageURLObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EstimateStereoImageDepthAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LeftImageURL'])) {
            $model->leftImageURLObject = $map['LeftImageURL'];
        }
        if (isset($map['RightImageURL'])) {
            $model->rightImageURLObject = $map['RightImageURL'];
        }

        return $model;
    }
}
