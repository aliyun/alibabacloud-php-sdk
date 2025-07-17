<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetMetaCollectionResponseBody\metaCollection;
use AlibabaCloud\Tea\Model;

class GetMetaCollectionResponseBody extends Model
{
    /**
     * @description The information about the collection.
     *
     * @var metaCollection
     */
    public $metaCollection;

    /**
     * @description Id of the request
     *
     * @example 1AFAE64E-D1BE-432B-A9****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metaCollection' => 'MetaCollection',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->metaCollection) {
            $res['MetaCollection'] = null !== $this->metaCollection ? $this->metaCollection->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMetaCollectionResponseBody
     */
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
