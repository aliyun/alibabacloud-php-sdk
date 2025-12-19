<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListAPIKeyCredentialProvidersResponseBody\APIKeyCredentialProviders;

class ListAPIKeyCredentialProvidersResponseBody extends Model
{
    /**
     * @var APIKeyCredentialProviders[]
     */
    public $APIKeyCredentialProviders;

    /**
     * @var int
     */
    public $maxResults;

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
        'APIKeyCredentialProviders' => 'APIKeyCredentialProviders',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->APIKeyCredentialProviders)) {
            Model::validateArray($this->APIKeyCredentialProviders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->APIKeyCredentialProviders) {
            if (\is_array($this->APIKeyCredentialProviders)) {
                $res['APIKeyCredentialProviders'] = [];
                $n1 = 0;
                foreach ($this->APIKeyCredentialProviders as $item1) {
                    $res['APIKeyCredentialProviders'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
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
        if (isset($map['APIKeyCredentialProviders'])) {
            if (!empty($map['APIKeyCredentialProviders'])) {
                $model->APIKeyCredentialProviders = [];
                $n1 = 0;
                foreach ($map['APIKeyCredentialProviders'] as $item1) {
                    $model->APIKeyCredentialProviders[$n1] = APIKeyCredentialProviders::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
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
