<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\initContainers\environmentVars;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\initContainers\environmentVars\valueFrom\fieldRef;
use AlibabaCloud\Tea\Model;

class valueFrom extends Model
{
    /**
     * @description The specified field.
     *
     * @var fieldRef
     */
    public $fieldRef;
    protected $_name = [
        'fieldRef' => 'FieldRef',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldRef) {
            $res['FieldRef'] = null !== $this->fieldRef ? $this->fieldRef->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return valueFrom
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldRef'])) {
            $model->fieldRef = fieldRef::fromMap($map['FieldRef']);
        }

        return $model;
    }
}
