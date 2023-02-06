<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListAssociationsResponseBody\prefixListAssociations;
use AlibabaCloud\Tea\Model;

class DescribePrefixListAssociationsResponseBody extends Model
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
     * @description Details about the resources that are associated with the prefix list.
     *
     * @var prefixListAssociations
     */
    public $prefixListAssociations;

    /**
     * @description The ID of the request.
     *
     * @example 38793DB8-A4B2-4AEC-BFD3-111234E9188D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken'              => 'NextToken',
        'prefixListAssociations' => 'PrefixListAssociations',
        'requestId'              => 'RequestId',
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
        if (null !== $this->prefixListAssociations) {
            $res['PrefixListAssociations'] = null !== $this->prefixListAssociations ? $this->prefixListAssociations->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePrefixListAssociationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PrefixListAssociations'])) {
            $model->prefixListAssociations = prefixListAssociations::fromMap($map['PrefixListAssociations']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
