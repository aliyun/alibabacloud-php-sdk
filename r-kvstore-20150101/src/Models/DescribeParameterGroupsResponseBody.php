<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupsResponseBody\parameterGroups;

class DescribeParameterGroupsResponseBody extends Model
{
    /**
     * @var parameterGroups[]
     */
    public $parameterGroups;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'parameterGroups' => 'ParameterGroups',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->parameterGroups)) {
            Model::validateArray($this->parameterGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameterGroups) {
            if (\is_array($this->parameterGroups)) {
                $res['ParameterGroups'] = [];
                $n1 = 0;
                foreach ($this->parameterGroups as $item1) {
                    $res['ParameterGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ParameterGroups'])) {
            if (!empty($map['ParameterGroups'])) {
                $model->parameterGroups = [];
                $n1 = 0;
                foreach ($map['ParameterGroups'] as $item1) {
                    $model->parameterGroups[$n1] = parameterGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
