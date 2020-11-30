<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribleLayer7InstanceRelationsResponse\layer7InstanceRelations;

use AlibabaCloud\Tea\Model;

class instanceDetails extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $functionVersion;

    /**
     * @var string[]
     */
    public $eipList;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'functionVersion' => 'FunctionVersion',
        'eipList'         => 'EipList',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('functionVersion', $this->functionVersion, true);
        Model::validateRequired('eipList', $this->eipList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->functionVersion) {
            $res['FunctionVersion'] = $this->functionVersion;
        }
        if (null !== $this->eipList) {
            $res['EipList'] = $this->eipList;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['FunctionVersion'])) {
            $model->functionVersion = $map['FunctionVersion'];
        }
        if (isset($map['EipList'])) {
            if (!empty($map['EipList'])) {
                $model->eipList = $map['EipList'];
            }
        }

        return $model;
    }
}
