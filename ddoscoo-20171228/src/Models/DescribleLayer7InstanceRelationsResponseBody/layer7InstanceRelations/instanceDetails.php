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
     * @example default
     *
     * @var string
     */
    public $functionVersion;

    /**
     * @example ddoscoo-cn-XXXXX
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ipMode;

    /**
     * @var string
     */
    public $ipVersion;
    protected $_name = [
        'eipList'         => 'EipList',
        'functionVersion' => 'FunctionVersion',
        'instanceId'      => 'InstanceId',
        'ipMode'          => 'IpMode',
        'ipVersion'       => 'IpVersion',
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
        if (null !== $this->ipMode) {
            $res['IpMode'] = $this->ipMode;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
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
        if (isset($map['IpMode'])) {
            $model->ipMode = $map['IpMode'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        return $model;
    }
}
