<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListStressesResponseBody;

use AlibabaCloud\Tea\Model;

class stresses extends Model
{
    /**
     * @var int
     */
    public $availableAgent;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $stressName;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'availableAgent' => 'AvailableAgent',
        'createTime'     => 'CreateTime',
        'message'        => 'Message',
        'region'         => 'Region',
        'serviceName'    => 'ServiceName',
        'status'         => 'Status',
        'stressName'     => 'StressName',
        'updateTime'     => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableAgent) {
            $res['AvailableAgent'] = $this->availableAgent;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stressName) {
            $res['StressName'] = $this->stressName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stresses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableAgent'])) {
            $model->availableAgent = $map['AvailableAgent'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StressName'])) {
            $model->stressName = $map['StressName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
