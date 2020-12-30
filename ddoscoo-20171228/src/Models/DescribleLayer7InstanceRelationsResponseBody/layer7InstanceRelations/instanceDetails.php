<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribleLayer7InstanceRelationsResponseBody\layer7InstanceRelations;

use AlibabaCloud\Tea\Model;

class instanceDetails extends Model
{
    /**
     * @var string[]
     */
    public $eipList;

    /**
     * @var string
     */
    public $functionVersion;

    /**
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
