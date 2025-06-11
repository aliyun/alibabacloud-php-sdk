<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessConfigurationProvisioningsResponseBody\accessConfigurationProvisionings;

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
        'isTruncated' => 'IsTruncated',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCounts' => 'TotalCounts',
    ];

    public function validate()
    {
        if (\is_array($this->accessConfigurationProvisionings)) {
            Model::validateArray($this->accessConfigurationProvisionings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessConfigurationProvisionings) {
            if (\is_array($this->accessConfigurationProvisionings)) {
                $res['AccessConfigurationProvisionings'] = [];
                $n1 = 0;
                foreach ($this->accessConfigurationProvisionings as $item1) {
                    $res['AccessConfigurationProvisionings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessConfigurationProvisionings'])) {
            if (!empty($map['AccessConfigurationProvisionings'])) {
                $model->accessConfigurationProvisionings = [];
                $n1 = 0;
                foreach ($map['AccessConfigurationProvisionings'] as $item1) {
                    $model->accessConfigurationProvisionings[$n1++] = accessConfigurationProvisionings::fromMap($item1);
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
