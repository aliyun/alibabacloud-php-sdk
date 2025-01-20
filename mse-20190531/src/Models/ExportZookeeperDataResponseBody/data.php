<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ExportZookeeperDataResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $contentMap;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $exportType;
    /**
     * @var string
     */
    public $extend;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $kubeoneTaskIds;
    /**
     * @var string
     */
    public $status;
    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'contentMap'     => 'ContentMap',
        'createTime'     => 'CreateTime',
        'exportType'     => 'ExportType',
        'extend'         => 'Extend',
        'id'             => 'Id',
        'instanceId'     => 'InstanceId',
        'kubeoneTaskIds' => 'KubeoneTaskIds',
        'status'         => 'Status',
        'updateTime'     => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->contentMap)) {
            Model::validateArray($this->contentMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentMap) {
            if (\is_array($this->contentMap)) {
                $res['ContentMap'] = [];
                foreach ($this->contentMap as $key1 => $value1) {
                    $res['ContentMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->kubeoneTaskIds) {
            $res['KubeoneTaskIds'] = $this->kubeoneTaskIds;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ContentMap'])) {
            if (!empty($map['ContentMap'])) {
                $model->contentMap = [];
                foreach ($map['ContentMap'] as $key1 => $value1) {
                    $model->contentMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['KubeoneTaskIds'])) {
            $model->kubeoneTaskIds = $map['KubeoneTaskIds'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
