<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListInstancePatchStatesResponseBody\instancePatchStates;
use AlibabaCloud\Tea\Model;

class ListInstancePatchStatesResponseBody extends Model
{
    /**
     * @var instancePatchStates[]
     */
    public $instancePatchStates;

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
    protected $_name = [
        'instancePatchStates' => 'InstancePatchStates',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instancePatchStates) {
            $res['InstancePatchStates'] = [];
            if (null !== $this->instancePatchStates && \is_array($this->instancePatchStates)) {
                $n = 0;
                foreach ($this->instancePatchStates as $item) {
                    $res['InstancePatchStates'][$n++] = null !== $item ? $item->toMap() : $item;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancePatchStatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstancePatchStates'])) {
            if (!empty($map['InstancePatchStates'])) {
                $model->instancePatchStates = [];
                $n                          = 0;
                foreach ($map['InstancePatchStates'] as $item) {
                    $model->instancePatchStates[$n++] = null !== $item ? instancePatchStates::fromMap($item) : $item;
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

        return $model;
    }
}
