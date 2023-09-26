<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models;

use AlibabaCloud\Tea\Model;

class GetApiMethodsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $methods;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'methods'   => 'Methods',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->methods) {
            $res['Methods'] = $this->methods;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApiMethodsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Methods'])) {
            if (!empty($map['Methods'])) {
                $model->methods = $map['Methods'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
