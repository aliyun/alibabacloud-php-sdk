<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListComponentInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class componentInstances extends Model
{
    /**
     * @var string
     */
    public $applicationName;
    /**
     * @var string
     */
    public $bizState;
    /**
     * @var string
     */
    public $commissionState;
    /**
     * @var string
     */
    public $componentInstanceState;
    /**
     * @var string
     */
    public $componentName;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $desiredState;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var string
     */
    public $nodeName;
    protected $_name = [
        'applicationName'        => 'ApplicationName',
        'bizState'               => 'BizState',
        'commissionState'        => 'CommissionState',
        'componentInstanceState' => 'ComponentInstanceState',
        'componentName'          => 'ComponentName',
        'createTime'             => 'CreateTime',
        'desiredState'           => 'DesiredState',
        'nodeId'                 => 'NodeId',
        'nodeName'               => 'NodeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->bizState) {
            $res['BizState'] = $this->bizState;
        }

        if (null !== $this->commissionState) {
            $res['CommissionState'] = $this->commissionState;
        }

        if (null !== $this->componentInstanceState) {
            $res['ComponentInstanceState'] = $this->componentInstanceState;
        }

        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->desiredState) {
            $res['DesiredState'] = $this->desiredState;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
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
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['BizState'])) {
            $model->bizState = $map['BizState'];
        }

        if (isset($map['CommissionState'])) {
            $model->commissionState = $map['CommissionState'];
        }

        if (isset($map['ComponentInstanceState'])) {
            $model->componentInstanceState = $map['ComponentInstanceState'];
        }

        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DesiredState'])) {
            $model->desiredState = $map['DesiredState'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        return $model;
    }
}
