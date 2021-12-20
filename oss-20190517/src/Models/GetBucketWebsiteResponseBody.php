<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketWebsiteResponseBody\errorDocument;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketWebsiteResponseBody\indexDocument;
use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketWebsiteResponseBody\routingRules;
use AlibabaCloud\Tea\Model;

class GetBucketWebsiteResponseBody extends Model
{
    /**
     * @var errorDocument
     */
    public $errorDocument;

    /**
     * @var indexDocument
     */
    public $indexDocument;

    /**
     * @var routingRules
     */
    public $routingRules;
    protected $_name = [
        'errorDocument' => 'ErrorDocument',
        'indexDocument' => 'IndexDocument',
        'routingRules'  => 'RoutingRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorDocument) {
            $res['ErrorDocument'] = null !== $this->errorDocument ? $this->errorDocument->toMap() : null;
        }
        if (null !== $this->indexDocument) {
            $res['IndexDocument'] = null !== $this->indexDocument ? $this->indexDocument->toMap() : null;
        }
        if (null !== $this->routingRules) {
            $res['RoutingRules'] = null !== $this->routingRules ? $this->routingRules->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBucketWebsiteResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorDocument'])) {
            $model->errorDocument = errorDocument::fromMap($map['ErrorDocument']);
        }
        if (isset($map['IndexDocument'])) {
            $model->indexDocument = indexDocument::fromMap($map['IndexDocument']);
        }
        if (isset($map['RoutingRules'])) {
            $model->routingRules = routingRules::fromMap($map['RoutingRules']);
        }

        return $model;
    }
}
