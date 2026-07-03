<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationSecurityDomainsResponseBody\normalizationSecurityDomains;

class ListNormalizationSecurityDomainsResponseBody extends Model
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
     * @var normalizationSecurityDomains[]
     */
    public $normalizationSecurityDomains;

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
        'normalizationSecurityDomains' => 'NormalizationSecurityDomains',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->normalizationSecurityDomains)) {
            Model::validateArray($this->normalizationSecurityDomains);
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

        if (null !== $this->normalizationSecurityDomains) {
            if (\is_array($this->normalizationSecurityDomains)) {
                $res['NormalizationSecurityDomains'] = [];
                $n1 = 0;
                foreach ($this->normalizationSecurityDomains as $item1) {
                    $res['NormalizationSecurityDomains'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['NormalizationSecurityDomains'])) {
            if (!empty($map['NormalizationSecurityDomains'])) {
                $model->normalizationSecurityDomains = [];
                $n1 = 0;
                foreach ($map['NormalizationSecurityDomains'] as $item1) {
                    $model->normalizationSecurityDomains[$n1] = normalizationSecurityDomains::fromMap($item1);
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
