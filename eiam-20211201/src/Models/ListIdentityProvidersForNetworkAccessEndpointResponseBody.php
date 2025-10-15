<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListIdentityProvidersForNetworkAccessEndpointResponseBody\identityProvidersForNetworkAccessEndpoint;

class ListIdentityProvidersForNetworkAccessEndpointResponseBody extends Model
{
    /**
     * @var identityProvidersForNetworkAccessEndpoint[]
     */
    public $identityProvidersForNetworkAccessEndpoint;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'identityProvidersForNetworkAccessEndpoint' => 'IdentityProvidersForNetworkAccessEndpoint',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->identityProvidersForNetworkAccessEndpoint)) {
            Model::validateArray($this->identityProvidersForNetworkAccessEndpoint);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identityProvidersForNetworkAccessEndpoint) {
            if (\is_array($this->identityProvidersForNetworkAccessEndpoint)) {
                $res['IdentityProvidersForNetworkAccessEndpoint'] = [];
                $n1 = 0;
                foreach ($this->identityProvidersForNetworkAccessEndpoint as $item1) {
                    $res['IdentityProvidersForNetworkAccessEndpoint'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['IdentityProvidersForNetworkAccessEndpoint'])) {
            if (!empty($map['IdentityProvidersForNetworkAccessEndpoint'])) {
                $model->identityProvidersForNetworkAccessEndpoint = [];
                $n1 = 0;
                foreach ($map['IdentityProvidersForNetworkAccessEndpoint'] as $item1) {
                    $model->identityProvidersForNetworkAccessEndpoint[$n1] = identityProvidersForNetworkAccessEndpoint::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
