<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class DeployAppRequest extends Model
{
    /**
     * @var bool
     */
    public $armsFlag;

    /**
     * @var string[]
     */
    public $containerImageList;

    /**
     * @var string
     */
    public $defaultPacketOfAppGroup;

    /**
     * @var int
     */
    public $deployPacketId;

    /**
     * @var string
     */
    public $deployPacketUrl;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $envId;

    /**
     * @var string[]
     */
    public $initContainerImageList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pauseType;

    /**
     * @var int
     */
    public $totalPartitions;

    /**
     * @var string
     */
    public $updateStrategyType;
    protected $_name = [
        'armsFlag'                => 'ArmsFlag',
        'containerImageList'      => 'ContainerImageList',
        'defaultPacketOfAppGroup' => 'DefaultPacketOfAppGroup',
        'deployPacketId'          => 'DeployPacketId',
        'deployPacketUrl'         => 'DeployPacketUrl',
        'description'             => 'Description',
        'envId'                   => 'EnvId',
        'initContainerImageList'  => 'InitContainerImageList',
        'name'                    => 'Name',
        'pauseType'               => 'PauseType',
        'totalPartitions'         => 'TotalPartitions',
        'updateStrategyType'      => 'UpdateStrategyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->armsFlag) {
            $res['ArmsFlag'] = $this->armsFlag;
        }
        if (null !== $this->containerImageList) {
            $res['ContainerImageList'] = $this->containerImageList;
        }
        if (null !== $this->defaultPacketOfAppGroup) {
            $res['DefaultPacketOfAppGroup'] = $this->defaultPacketOfAppGroup;
        }
        if (null !== $this->deployPacketId) {
            $res['DeployPacketId'] = $this->deployPacketId;
        }
        if (null !== $this->deployPacketUrl) {
            $res['DeployPacketUrl'] = $this->deployPacketUrl;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->initContainerImageList) {
            $res['InitContainerImageList'] = $this->initContainerImageList;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pauseType) {
            $res['PauseType'] = $this->pauseType;
        }
        if (null !== $this->totalPartitions) {
            $res['TotalPartitions'] = $this->totalPartitions;
        }
        if (null !== $this->updateStrategyType) {
            $res['UpdateStrategyType'] = $this->updateStrategyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeployAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArmsFlag'])) {
            $model->armsFlag = $map['ArmsFlag'];
        }
        if (isset($map['ContainerImageList'])) {
            if (!empty($map['ContainerImageList'])) {
                $model->containerImageList = $map['ContainerImageList'];
            }
        }
        if (isset($map['DefaultPacketOfAppGroup'])) {
            $model->defaultPacketOfAppGroup = $map['DefaultPacketOfAppGroup'];
        }
        if (isset($map['DeployPacketId'])) {
            $model->deployPacketId = $map['DeployPacketId'];
        }
        if (isset($map['DeployPacketUrl'])) {
            $model->deployPacketUrl = $map['DeployPacketUrl'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['InitContainerImageList'])) {
            if (!empty($map['InitContainerImageList'])) {
                $model->initContainerImageList = $map['InitContainerImageList'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PauseType'])) {
            $model->pauseType = $map['PauseType'];
        }
        if (isset($map['TotalPartitions'])) {
            $model->totalPartitions = $map['TotalPartitions'];
        }
        if (isset($map['UpdateStrategyType'])) {
            $model->updateStrategyType = $map['UpdateStrategyType'];
        }

        return $model;
    }
}
