<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class ListFeatureConsistencyCheckJobFeatureReportsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $logItemId;
    /**
     * @var string
     */
    public $logRequestId;
    /**
     * @var string
     */
    public $logUserId;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'logItemId'    => 'LogItemId',
        'logRequestId' => 'LogRequestId',
        'logUserId'    => 'LogUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->logItemId) {
            $res['LogItemId'] = $this->logItemId;
        }

        if (null !== $this->logRequestId) {
            $res['LogRequestId'] = $this->logRequestId;
        }

        if (null !== $this->logUserId) {
            $res['LogUserId'] = $this->logUserId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LogItemId'])) {
            $model->logItemId = $map['LogItemId'];
        }

        if (isset($map['LogRequestId'])) {
            $model->logRequestId = $map['LogRequestId'];
        }

        if (isset($map['LogUserId'])) {
            $model->logUserId = $map['LogUserId'];
        }

        return $model;
    }
}
