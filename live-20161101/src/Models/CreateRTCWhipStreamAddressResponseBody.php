<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateRTCWhipStreamAddressResponseBody extends Model
{
    /**
     * @example 58E7**D4-xxxx-xxxx-xxxx-6B5**6Cxxxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @example https://xxxxxx.media-sh.xxxxx.com/xxxxxxxxxxxx/3723a3xxxxxxxxx223c606b***5f7a2bc7c56ea5cdd0xxxxe?auth_key=17495xxxxx-xxxx-0-f013003067c78c4053f9cd0xxxxxxx&qqzr=H4sIAAAAAAAC_6pWSlayUkrOMxxxxxxrPyCxQ0lFKQTCLlKyUjM2Nj**NDQ1TEy2Mjc3xxxxxxxxxxqRYAAAD__xxxxx__xxxxxxxx
     *
     * @var string
     */
    public $whipAddress;
    protected $_name = [
        'requestId' => 'RequestId',
        'whipAddress' => 'WhipAddress',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->whipAddress) {
            $res['WhipAddress'] = $this->whipAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRTCWhipStreamAddressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WhipAddress'])) {
            $model->whipAddress = $map['WhipAddress'];
        }

        return $model;
    }
}
