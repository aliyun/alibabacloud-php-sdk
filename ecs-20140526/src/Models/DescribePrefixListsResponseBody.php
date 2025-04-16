<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListsResponseBody\prefixLists;

class DescribePrefixListsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var prefixLists
     */
    public $prefixLists;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken' => 'NextToken',
        'prefixLists' => 'PrefixLists',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->prefixLists) {
            $this->prefixLists->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->prefixLists) {
            $res['PrefixLists'] = null !== $this->prefixLists ? $this->prefixLists->toArray($noStream) : $this->prefixLists;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
