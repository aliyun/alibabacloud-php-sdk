<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListAINodePoolsResponseBody\AINodePoolInfos;

use AlibabaCloud\Dara\Model;

class AINodeInfos extends Model
{
    /**
     * @var string
     */
    public $bindObject;

    /**
     * @var string
     */
    public $bindStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $nodeSpec;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'bindObject' => 'BindObject',
        'bindStatus' => 'BindStatus',
        'createTime' => 'CreateTime',
        'namespace' => 'Namespace',
        'nodeName' => 'NodeName',
        'nodeSpec' => 'NodeSpec',
        'updateTime' => 'UpdateTime',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindObject) {
            $res['BindObject'] = $this->bindObject;
        }

        if (null !== $this->bindStatus) {
            $res['BindStatus'] = $this->bindStatus;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeSpec) {
            $res['NodeSpec'] = $this->nodeSpec;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['BindObject'])) {
            $model->bindObject = $map['BindObject'];
        }

        if (isset($map['BindStatus'])) {
            $model->bindStatus = $map['BindStatus'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['NodeSpec'])) {
            $model->nodeSpec = $map['NodeSpec'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
