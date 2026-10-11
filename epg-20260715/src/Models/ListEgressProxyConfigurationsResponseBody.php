<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\ListEgressProxyConfigurationsResponseBody\egressProxyConfigurations;

class ListEgressProxyConfigurationsResponseBody extends Model
{
    /**
     * @var egressProxyConfigurations[]
     */
    public $egressProxyConfigurations;

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
        'egressProxyConfigurations' => 'EgressProxyConfigurations',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->egressProxyConfigurations)) {
            Model::validateArray($this->egressProxyConfigurations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->egressProxyConfigurations) {
            if (\is_array($this->egressProxyConfigurations)) {
                $res['EgressProxyConfigurations'] = [];
                $n1 = 0;
                foreach ($this->egressProxyConfigurations as $item1) {
                    $res['EgressProxyConfigurations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EgressProxyConfigurations'])) {
            if (!empty($map['EgressProxyConfigurations'])) {
                $model->egressProxyConfigurations = [];
                $n1 = 0;
                foreach ($map['EgressProxyConfigurations'] as $item1) {
                    $model->egressProxyConfigurations[$n1] = egressProxyConfigurations::fromMap($item1);
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
