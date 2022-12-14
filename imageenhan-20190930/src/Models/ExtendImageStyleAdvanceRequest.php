<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ExtendImageStyleAdvanceRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/ExtendImageStyle/ExtendImageStyle1.jpg
     *
     * @var Stream
     */
    public $majorUrlObject;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/ExtendImageStyle/ExtendImageStyle6.jpg
     *
     * @var Stream
     */
    public $styleUrlObject;
    protected $_name = [
        'majorUrlObject' => 'MajorUrl',
        'styleUrlObject' => 'StyleUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->majorUrlObject) {
            $res['MajorUrl'] = $this->majorUrlObject;
        }
        if (null !== $this->styleUrlObject) {
            $res['StyleUrl'] = $this->styleUrlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExtendImageStyleAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MajorUrl'])) {
            $model->majorUrlObject = $map['MajorUrl'];
        }
        if (isset($map['StyleUrl'])) {
            $model->styleUrlObject = $map['StyleUrl'];
        }

        return $model;
    }
}
