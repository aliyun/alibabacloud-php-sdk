<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models;

use AlibabaCloud\Tea\Model;

class ListAppInfosShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $requestParamsShrink;
    protected $_name = [
        'requestParamsShrink' => 'RequestParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestParamsShrink) {
            $res['RequestParams'] = $this->requestParamsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppInfosShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestParams'])) {
            $model->requestParamsShrink = $map['RequestParams'];
        }

        return $model;
    }
}
