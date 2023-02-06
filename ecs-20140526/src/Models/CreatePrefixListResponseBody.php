<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreatePrefixListResponseBody extends Model
{
    /**
     * @description The ID of the prefix list.
     *
     * @example pl-x1j1k5ykzqlixdcy****
     *
     * @var string
     */
    public $prefixListId;

    /**
     * @description The ID of the request.
     *
     * @example 38793DB8-A4B2-4AEC-BFD3-111234E9188D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'prefixListId' => 'PrefixListId',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prefixListId) {
            $res['PrefixListId'] = $this->prefixListId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePrefixListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrefixListId'])) {
            $model->prefixListId = $map['PrefixListId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
