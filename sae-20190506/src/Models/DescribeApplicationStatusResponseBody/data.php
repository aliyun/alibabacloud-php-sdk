<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $armsAdvancedEnabled;

    /**
     * @var string
     */
    public $armsApmInfo;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $currentStatus;

    /**
     * @var bool
     */
    public $enableAgent;

    /**
     * @var int
     */
    public $fileSizeLimit;

    /**
     * @var string
     */
    public $lastChangeOrderId;

    /**
     * @var bool
     */
    public $lastChangeOrderRunning;

    /**
     * @var string
     */
    public $lastChangeOrderStatus;

    /**
     * @var int
     */
    public $runningInstances;

    /**
     * @var string
     */
    public $subStatus;
    protected $_name = [
        'appId'                  => 'AppId',
        'armsAdvancedEnabled'    => 'ArmsAdvancedEnabled',
        'armsApmInfo'            => 'ArmsApmInfo',
        'createTime'             => 'CreateTime',
        'currentStatus'          => 'CurrentStatus',
        'enableAgent'            => 'EnableAgent',
        'fileSizeLimit'          => 'FileSizeLimit',
        'lastChangeOrderId'      => 'LastChangeOrderId',
        'lastChangeOrderRunning' => 'LastChangeOrderRunning',
        'lastChangeOrderStatus'  => 'LastChangeOrderStatus',
        'runningInstances'       => 'RunningInstances',
        'subStatus'              => 'SubStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->armsAdvancedEnabled) {
            $res['ArmsAdvancedEnabled'] = $this->armsAdvancedEnabled;
        }
        if (null !== $this->armsApmInfo) {
            $res['ArmsApmInfo'] = $this->armsApmInfo;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->currentStatus) {
            $res['CurrentStatus'] = $this->currentStatus;
        }
        if (null !== $this->enableAgent) {
            $res['EnableAgent'] = $this->enableAgent;
        }
        if (null !== $this->fileSizeLimit) {
            $res['FileSizeLimit'] = $this->fileSizeLimit;
        }
        if (null !== $this->lastChangeOrderId) {
            $res['LastChangeOrderId'] = $this->lastChangeOrderId;
        }
        if (null !== $this->lastChangeOrderRunning) {
            $res['LastChangeOrderRunning'] = $this->lastChangeOrderRunning;
        }
        if (null !== $this->lastChangeOrderStatus) {
            $res['LastChangeOrderStatus'] = $this->lastChangeOrderStatus;
        }
        if (null !== $this->runningInstances) {
            $res['RunningInstances'] = $this->runningInstances;
        }
        if (null !== $this->subStatus) {
            $res['SubStatus'] = $this->subStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ArmsAdvancedEnabled'])) {
            $model->armsAdvancedEnabled = $map['ArmsAdvancedEnabled'];
        }
        if (isset($map['ArmsApmInfo'])) {
            $model->armsApmInfo = $map['ArmsApmInfo'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CurrentStatus'])) {
            $model->currentStatus = $map['CurrentStatus'];
        }
        if (isset($map['EnableAgent'])) {
            $model->enableAgent = $map['EnableAgent'];
        }
        if (isset($map['FileSizeLimit'])) {
            $model->fileSizeLimit = $map['FileSizeLimit'];
        }
        if (isset($map['LastChangeOrderId'])) {
            $model->lastChangeOrderId = $map['LastChangeOrderId'];
        }
        if (isset($map['LastChangeOrderRunning'])) {
            $model->lastChangeOrderRunning = $map['LastChangeOrderRunning'];
        }
        if (isset($map['LastChangeOrderStatus'])) {
            $model->lastChangeOrderStatus = $map['LastChangeOrderStatus'];
        }
        if (isset($map['RunningInstances'])) {
            $model->runningInstances = $map['RunningInstances'];
        }
        if (isset($map['SubStatus'])) {
            $model->subStatus = $map['SubStatus'];
        }

        return $model;
    }
}
