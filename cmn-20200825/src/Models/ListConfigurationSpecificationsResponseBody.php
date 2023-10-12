<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListConfigurationSpecificationsResponseBody\configurationSpecification;
use AlibabaCloud\Tea\Model;

class ListConfigurationSpecificationsResponseBody extends Model
{
    /**
     * @var configurationSpecification[]
     */
    public $configurationSpecification;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 1
     *
     * @var int
     */
    public $nextToken;

    /**
     * @example requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'configurationSpecification' => 'ConfigurationSpecification',
        'maxResults'                 => 'MaxResults',
        'nextToken'                  => 'NextToken',
        'requestId'                  => 'RequestId',
        'totalCount'                 => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configurationSpecification) {
            $res['ConfigurationSpecification'] = [];
            if (null !== $this->configurationSpecification && \is_array($this->configurationSpecification)) {
                $n = 0;
                foreach ($this->configurationSpecification as $item) {
                    $res['ConfigurationSpecification'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListConfigurationSpecificationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigurationSpecification'])) {
            if (!empty($map['ConfigurationSpecification'])) {
                $model->configurationSpecification = [];
                $n                                 = 0;
                foreach ($map['ConfigurationSpecification'] as $item) {
                    $model->configurationSpecification[$n++] = null !== $item ? configurationSpecification::fromMap($item) : $item;
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
