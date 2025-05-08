<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListInstancePatchStatesResponseBody\instancePatchStates;

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
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->instancePatchStates)) {
            Model::validateArray($this->instancePatchStates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instancePatchStates) {
            if (\is_array($this->instancePatchStates)) {
                $res['InstancePatchStates'] = [];
                $n1 = 0;
                foreach ($this->instancePatchStates as $item1) {
                    $res['InstancePatchStates'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstancePatchStates'])) {
            if (!empty($map['InstancePatchStates'])) {
                $model->instancePatchStates = [];
                $n1 = 0;
                foreach ($map['InstancePatchStates'] as $item1) {
                    $model->instancePatchStates[$n1++] = instancePatchStates::fromMap($item1);
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
