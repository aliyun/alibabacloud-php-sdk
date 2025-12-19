<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListOAuth2CredentialProvidersResponseBody\OAuth2CredentialProviders;

class ListOAuth2CredentialProvidersResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var OAuth2CredentialProviders[]
     */
    public $OAuth2CredentialProviders;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'OAuth2CredentialProviders' => 'OAuth2CredentialProviders',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->OAuth2CredentialProviders)) {
            Model::validateArray($this->OAuth2CredentialProviders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->OAuth2CredentialProviders) {
            if (\is_array($this->OAuth2CredentialProviders)) {
                $res['OAuth2CredentialProviders'] = [];
                $n1 = 0;
                foreach ($this->OAuth2CredentialProviders as $item1) {
                    $res['OAuth2CredentialProviders'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OAuth2CredentialProviders'])) {
            if (!empty($map['OAuth2CredentialProviders'])) {
                $model->OAuth2CredentialProviders = [];
                $n1 = 0;
                foreach ($map['OAuth2CredentialProviders'] as $item1) {
                    $model->OAuth2CredentialProviders[$n1] = OAuth2CredentialProviders::fromMap($item1);
                    ++$n1;
                }
            }
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
