<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListLLMConfigsResponseBody\LLMConfigs;
use AlibabaCloud\Tea\Model;

class ListLLMConfigsResponseBody extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var LLMConfigs[]
     */
    public $LLMConfigs;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6mbU5D/SFHCHMApYkMcWlp5
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Id of the request
     *
     * @example 898DB17C-09E9-5C41-909D-269BA183EB92
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'LLMConfigs' => 'LLMConfigs',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->LLMConfigs) {
            $res['LLMConfigs'] = [];
            if (null !== $this->LLMConfigs && \is_array($this->LLMConfigs)) {
                $n = 0;
                foreach ($this->LLMConfigs as $item) {
                    $res['LLMConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListLLMConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LLMConfigs'])) {
            if (!empty($map['LLMConfigs'])) {
                $model->LLMConfigs = [];
                $n = 0;
                foreach ($map['LLMConfigs'] as $item) {
                    $model->LLMConfigs[$n++] = null !== $item ? LLMConfigs::fromMap($item) : $item;
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
