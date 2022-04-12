<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO\instanceDTOList;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO\instanceDTOList\instanceDTO\instanceStageDTOList;
use AlibabaCloud\Tea\Model;

class instanceDTO extends Model
{
    /**
     * @var string
     */
    public $instanceIp;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var instanceStageDTOList
     */
    public $instanceStageDTOList;

    /**
     * @var string
     */
    public $podName;

    /**
     * @var string
     */
    public $podStatus;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'instanceIp'           => 'InstanceIp',
        'instanceName'         => 'InstanceName',
        'instanceStageDTOList' => 'InstanceStageDTOList',
        'podName'              => 'PodName',
        'podStatus'            => 'PodStatus',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIp) {
            $res['InstanceIp'] = $this->instanceIp;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceStageDTOList) {
            $res['InstanceStageDTOList'] = null !== $this->instanceStageDTOList ? $this->instanceStageDTOList->toMap() : null;
        }
        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }
        if (null !== $this->podStatus) {
            $res['PodStatus'] = $this->podStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIp'])) {
            $model->instanceIp = $map['InstanceIp'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceStageDTOList'])) {
            $model->instanceStageDTOList = instanceStageDTOList::fromMap($map['InstanceStageDTOList']);
        }
        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }
        if (isset($map['PodStatus'])) {
            $model->podStatus = $map['PodStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
