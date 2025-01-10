<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListInstancesByNcdResponseBody;

use AlibabaCloud\SDK\Eflo\V20220530\Models\ListInstancesByNcdResponseBody\content\instanceInfos;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description A collection of instances whose network communication distance from the source instance ID does not exceed maxNcd
     *
     * @var instanceInfos[]
     */
    public $instanceInfos;

    /**
     * @description Instance Type
     *
     * Valid value:
     *
     *   node: Lingjun node.
     *   lni: lingjun network interface controller.
     *
     * @example lni
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Maximum communication distance between nodes
     *
     * @example 3
     *
     * @var int
     */
    public $maxNcd;

    /**
     * @description The ID of the source instance.
     *
     * @example lni-1234****
     *
     * @var string
     */
    public $sourceInstanceId;
    protected $_name = [
        'instanceInfos'    => 'InstanceInfos',
        'instanceType'     => 'InstanceType',
        'maxNcd'           => 'MaxNcd',
        'sourceInstanceId' => 'SourceInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceInfos) {
            $res['InstanceInfos'] = [];
            if (null !== $this->instanceInfos && \is_array($this->instanceInfos)) {
                $n = 0;
                foreach ($this->instanceInfos as $item) {
                    $res['InstanceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->maxNcd) {
            $res['MaxNcd'] = $this->maxNcd;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceInfos'])) {
            if (!empty($map['InstanceInfos'])) {
                $model->instanceInfos = [];
                $n                    = 0;
                foreach ($map['InstanceInfos'] as $item) {
                    $model->instanceInfos[$n++] = null !== $item ? instanceInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MaxNcd'])) {
            $model->maxNcd = $map['MaxNcd'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }

        return $model;
    }
}
