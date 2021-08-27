<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListsResponseBody\prefixLists;
use AlibabaCloud\Tea\Model;

class DescribePrefixListsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var prefixLists
     */
    public $prefixLists;
    protected $_name = [
        'nextToken'   => 'NextToken',
        'requestId'   => 'RequestId',
        'prefixLists' => 'PrefixLists',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->prefixLists) {
            $res['PrefixLists'] = null !== $this->prefixLists ? $this->prefixLists->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PrefixLists'])) {
            $model->prefixLists = prefixLists::fromMap($map['PrefixLists']);
        }

        return $model;
    }
}
