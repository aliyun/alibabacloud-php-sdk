<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebInstanceRelationsResponseBody\webInstanceRelations;

use AlibabaCloud\Tea\Model;

class instanceDetails extends Model
{
    /**
     * @description The IP addresses of the instance.
     *
     * @var string[]
     */
    public $eipList;

    /**
     * @description The function plan of the instance. Valid values:
     *
     *   **default**: Standard function plan
     *   **enhance**: Enhanced function plan
     *
     * @example enhance
     *
     * @var string
     */
    public $functionVersion;

    /**
     * @description The ID of the instance.
     *
     * @example ddoscoo-cn-0pp163pd****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'eipList'         => 'EipList',
        'functionVersion' => 'FunctionVersion',
        'instanceId'      => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipList) {
            $res['EipList'] = $this->eipList;
        }
        if (null !== $this->functionVersion) {
            $res['FunctionVersion'] = $this->functionVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EipList'])) {
            if (!empty($map['EipList'])) {
                $model->eipList = $map['EipList'];
            }
        }
        if (isset($map['FunctionVersion'])) {
            $model->functionVersion = $map['FunctionVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
