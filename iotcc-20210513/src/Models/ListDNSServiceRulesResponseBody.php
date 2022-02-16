<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListDNSServiceRulesResponseBody\DNSServiceRules;
use AlibabaCloud\Tea\Model;

class ListDNSServiceRulesResponseBody extends Model
{
    /**
     * @var DNSServiceRules[]
     */
    public $DNSServiceRules;

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
        'DNSServiceRules' => 'DNSServiceRules',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DNSServiceRules) {
            $res['DNSServiceRules'] = [];
            if (null !== $this->DNSServiceRules && \is_array($this->DNSServiceRules)) {
                $n = 0;
                foreach ($this->DNSServiceRules as $item) {
                    $res['DNSServiceRules'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListDNSServiceRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DNSServiceRules'])) {
            if (!empty($map['DNSServiceRules'])) {
                $model->DNSServiceRules = [];
                $n                      = 0;
                foreach ($map['DNSServiceRules'] as $item) {
                    $model->DNSServiceRules[$n++] = null !== $item ? DNSServiceRules::fromMap($item) : $item;
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
