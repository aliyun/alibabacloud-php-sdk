<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListAssociationsResponseBody\prefixListAssociations;
use AlibabaCloud\Tea\Model;

class DescribePrefixListAssociationsResponseBody extends Model
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
     * @var prefixListAssociations
     */
    public $prefixListAssociations;
    protected $_name = [
        'nextToken'              => 'NextToken',
        'requestId'              => 'RequestId',
        'prefixListAssociations' => 'PrefixListAssociations',
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
        if (null !== $this->prefixListAssociations) {
            $res['PrefixListAssociations'] = null !== $this->prefixListAssociations ? $this->prefixListAssociations->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PrefixListAssociations'])) {
            $model->prefixListAssociations = prefixListAssociations::fromMap($map['PrefixListAssociations']);
        }

        return $model;
    }
}
