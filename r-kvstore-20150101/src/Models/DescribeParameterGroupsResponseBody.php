<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupsResponseBody\parameterGroups;
use AlibabaCloud\Tea\Model;

class DescribeParameterGroupsResponseBody extends Model
{
    /**
     * @description The list of parameter templates.
     *
     * @var parameterGroups[]
     */
    public $parameterGroups;

    /**
     * @description The request ID.
     *
     * @example 686BB8A6-BBA5-47E5-8A75-D2ADE433****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'parameterGroups' => 'ParameterGroups',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterGroups) {
            $res['ParameterGroups'] = [];
            if (null !== $this->parameterGroups && \is_array($this->parameterGroups)) {
                $n = 0;
                foreach ($this->parameterGroups as $item) {
                    $res['ParameterGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeParameterGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterGroups'])) {
            if (!empty($map['ParameterGroups'])) {
                $model->parameterGroups = [];
                $n                      = 0;
                foreach ($map['ParameterGroups'] as $item) {
                    $model->parameterGroups[$n++] = null !== $item ? parameterGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
