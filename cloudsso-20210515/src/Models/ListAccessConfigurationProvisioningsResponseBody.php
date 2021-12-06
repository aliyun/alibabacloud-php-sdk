<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessConfigurationProvisioningsResponseBody\accessConfigurationProvisionings;
use AlibabaCloud\Tea\Model;

class ListAccessConfigurationProvisioningsResponseBody extends Model
{
    /**
     * @var accessConfigurationProvisionings[]
     */
    public $accessConfigurationProvisionings;

    /**
     * @var bool
     */
    public $isTruncated;

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
    public $totalCounts;
    protected $_name = [
        'accessConfigurationProvisionings' => 'AccessConfigurationProvisionings',
        'isTruncated'                      => 'IsTruncated',
        'maxResults'                       => 'MaxResults',
        'nextToken'                        => 'NextToken',
        'requestId'                        => 'RequestId',
        'totalCounts'                      => 'TotalCounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessConfigurationProvisionings) {
            $res['AccessConfigurationProvisionings'] = [];
            if (null !== $this->accessConfigurationProvisionings && \is_array($this->accessConfigurationProvisionings)) {
                $n = 0;
                foreach ($this->accessConfigurationProvisionings as $item) {
                    $res['AccessConfigurationProvisionings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
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
        if (null !== $this->totalCounts) {
            $res['TotalCounts'] = $this->totalCounts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAccessConfigurationProvisioningsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessConfigurationProvisionings'])) {
            if (!empty($map['AccessConfigurationProvisionings'])) {
                $model->accessConfigurationProvisionings = [];
                $n                                       = 0;
                foreach ($map['AccessConfigurationProvisionings'] as $item) {
                    $model->accessConfigurationProvisionings[$n++] = null !== $item ? accessConfigurationProvisionings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
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
        if (isset($map['TotalCounts'])) {
            $model->totalCounts = $map['TotalCounts'];
        }

        return $model;
    }
}
