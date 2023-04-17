<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListsResponseBody\prefixLists;
use AlibabaCloud\Tea\Model;

class DescribePrefixListsResponseBody extends Model
{
    /**
     * @description The query token returned in this call. If the return value is empty, no more data is returned.
     *
     * @example AAAAAdDWBF2****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Details about the prefix lists.
     *
     * @var prefixLists
     */
    public $prefixLists;

    /**
     * @description The ID of the request.
     *
     * @example 38793DB8-A4B2-4AEC-BFD3-111234E9188D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken'   => 'NextToken',
        'prefixLists' => 'PrefixLists',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->prefixLists) {
            $res['PrefixLists'] = null !== $this->prefixLists ? $this->prefixLists->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePrefixListsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PrefixLists'])) {
            $model->prefixLists = prefixLists::fromMap($map['PrefixLists']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
