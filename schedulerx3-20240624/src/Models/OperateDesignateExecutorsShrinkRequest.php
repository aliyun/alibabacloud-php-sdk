<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Dara\Model;

class OperateDesignateExecutorsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $addressListShrink;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $designateType;

    /**
     * @var int
     */
    public $jobId;

    /**
     * @var bool
     */
    public $transferable;
    protected $_name = [
        'addressListShrink' => 'AddressList',
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'designateType' => 'DesignateType',
        'jobId' => 'JobId',
        'transferable' => 'Transferable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressListShrink) {
            $res['AddressList'] = $this->addressListShrink;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->designateType) {
            $res['DesignateType'] = $this->designateType;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->transferable) {
            $res['Transferable'] = $this->transferable;
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
        if (isset($map['AddressList'])) {
            $model->addressListShrink = $map['AddressList'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['DesignateType'])) {
            $model->designateType = $map['DesignateType'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['Transferable'])) {
            $model->transferable = $map['Transferable'];
        }

        return $model;
    }
}
