<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListAssociationsResponseBody\prefixListAssociations;

class DescribePrefixListAssociationsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var prefixListAssociations
     */
    public $prefixListAssociations;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken' => 'NextToken',
        'prefixListAssociations' => 'PrefixListAssociations',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->prefixListAssociations) {
            $this->prefixListAssociations->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->prefixListAssociations) {
            $res['PrefixListAssociations'] = null !== $this->prefixListAssociations ? $this->prefixListAssociations->toArray($noStream) : $this->prefixListAssociations;
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

        if (isset($map['PrefixListAssociations'])) {
            $model->prefixListAssociations = prefixListAssociations::fromMap($map['PrefixListAssociations']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
