<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetricDetailsResponseBody\resources;
use AlibabaCloud\Tea\Model;

class ListEvaluationMetricDetailsResponseBody extends Model
{
    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example AAAAAGEaXR18y1rqykZHIqRuBejOqED4S3Xne33c7zbn****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example AC9BD94C-D20C-4D27-88D4-89E8D75C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the non-compliant resources.
     *
     * @var resources[]
     */
    public $resources;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'resources' => 'Resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEvaluationMetricDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n                = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
