<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceFilterAttributesResponseBody\filterAttributes;
use AlibabaCloud\Tea\Model;

class DescribeResourceFilterAttributesResponseBody extends Model
{
    /**
     * @var filterAttributes
     */
    public $filterAttributes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'filterAttributes' => 'FilterAttributes',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterAttributes) {
            $res['FilterAttributes'] = null !== $this->filterAttributes ? $this->filterAttributes->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceFilterAttributesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilterAttributes'])) {
            $model->filterAttributes = filterAttributes::fromMap($map['FilterAttributes']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
