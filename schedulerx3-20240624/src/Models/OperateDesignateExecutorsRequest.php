<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Dara\Model;

class OperateDesignateExecutorsRequest extends Model
{
    /**
     * @var string[]
     */
    public $addressList;

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
        'addressList' => 'AddressList',
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'designateType' => 'DesignateType',
        'jobId' => 'JobId',
        'transferable' => 'Transferable',
    ];

    public function validate()
    {
        if (\is_array($this->addressList)) {
            Model::validateArray($this->addressList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressList) {
            if (\is_array($this->addressList)) {
                $res['AddressList'] = [];
                $n1 = 0;
                foreach ($this->addressList as $item1) {
                    $res['AddressList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['AddressList'])) {
                $model->addressList = [];
                $n1 = 0;
                foreach ($map['AddressList'] as $item1) {
                    $model->addressList[$n1] = $item1;
                    ++$n1;
                }
            }
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
