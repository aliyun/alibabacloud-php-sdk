<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetMetaCollectionResponseBody\metaCollection;

class GetMetaCollectionResponseBody extends Model
{
    /**
     * @var metaCollection
     */
    public $metaCollection;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metaCollection' => 'MetaCollection',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->metaCollection) {
            $this->metaCollection->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metaCollection) {
            $res['MetaCollection'] = null !== $this->metaCollection ? $this->metaCollection->toArray($noStream) : $this->metaCollection;
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
        if (isset($map['MetaCollection'])) {
            $model->metaCollection = metaCollection::fromMap($map['MetaCollection']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
