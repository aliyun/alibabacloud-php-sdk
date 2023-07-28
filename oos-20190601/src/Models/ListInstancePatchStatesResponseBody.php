<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListInstancePatchStatesResponseBody\instancePatchStates;
use AlibabaCloud\Tea\Model;

class ListInstancePatchStatesResponseBody extends Model
{
    /**
     * @description The number of patches that are not installed.
     *
     * @var instancePatchStates[]
     */
    public $instancePatchStates;

    /**
     * @description The details of patches of the instance.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The ID of the request.
     *
     * @example -
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of entries returned on each page.
     *
     * @example 9A47C086-E64D-52EE-8B2C-EFD23877C55E
     *
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
