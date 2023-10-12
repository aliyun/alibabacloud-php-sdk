<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListConfigurationVariateResponseBody\configurationVariate;
use AlibabaCloud\Tea\Model;

class ListConfigurationVariateResponseBody extends Model
{
    /**
     * @var configurationVariate[]
     */
    public $configurationVariate;

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
     * @example 200
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'configurationVariate' => 'ConfigurationVariate',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configurationVariate) {
            $res['ConfigurationVariate'] = [];
            if (null !== $this->configurationVariate && \is_array($this->configurationVariate)) {
                $n = 0;
                foreach ($this->configurationVariate as $item) {
                    $res['ConfigurationVariate'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListConfigurationVariateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigurationVariate'])) {
            if (!empty($map['ConfigurationVariate'])) {
                $model->configurationVariate = [];
                $n                           = 0;
                foreach ($map['ConfigurationVariate'] as $item) {
                    $model->configurationVariate[$n++] = null !== $item ? configurationVariate::fromMap($item) : $item;
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
