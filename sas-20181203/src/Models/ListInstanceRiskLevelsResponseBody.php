<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceRiskLevelsResponseBody\instanceRiskLevels;
use AlibabaCloud\Tea\Model;

class ListInstanceRiskLevelsResponseBody extends Model
{
    /**
     * @description The risk levels of instances.
     *
     * @var instanceRiskLevels[]
     */
    public $instanceRiskLevels;

    /**
     * @description The request ID.
     *
     * @example F5CF78A7-30AA-59DB-847F-13EE3AE7****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceRiskLevels' => 'InstanceRiskLevels',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceRiskLevels) {
            $res['InstanceRiskLevels'] = [];
            if (null !== $this->instanceRiskLevels && \is_array($this->instanceRiskLevels)) {
                $n = 0;
                foreach ($this->instanceRiskLevels as $item) {
                    $res['InstanceRiskLevels'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListInstanceRiskLevelsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceRiskLevels'])) {
            if (!empty($map['InstanceRiskLevels'])) {
                $model->instanceRiskLevels = [];
                $n                         = 0;
                foreach ($map['InstanceRiskLevels'] as $item) {
                    $model->instanceRiskLevels[$n++] = null !== $item ? instanceRiskLevels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
