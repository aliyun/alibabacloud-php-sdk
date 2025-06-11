<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessConfigurationsResponseBody\accessConfigurations;

class ListAccessConfigurationsResponseBody extends Model
{
    /**
     * @var accessConfigurations[]
     */
    public $accessConfigurations;

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
        'accessConfigurations' => 'AccessConfigurations',
        'isTruncated' => 'IsTruncated',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCounts' => 'TotalCounts',
    ];

    public function validate()
    {
        if (\is_array($this->accessConfigurations)) {
            Model::validateArray($this->accessConfigurations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessConfigurations) {
            if (\is_array($this->accessConfigurations)) {
                $res['AccessConfigurations'] = [];
                $n1 = 0;
                foreach ($this->accessConfigurations as $item1) {
                    $res['AccessConfigurations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccessConfigurations'])) {
            if (!empty($map['AccessConfigurations'])) {
                $model->accessConfigurations = [];
                $n1 = 0;
                foreach ($map['AccessConfigurations'] as $item1) {
                    $model->accessConfigurations[$n1++] = accessConfigurations::fromMap($item1);
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
