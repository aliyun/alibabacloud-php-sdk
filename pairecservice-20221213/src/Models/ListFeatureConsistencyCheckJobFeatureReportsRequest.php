<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class ListFeatureConsistencyCheckJobFeatureReportsRequest extends Model
{
    /**
     * @example pairec-cn-********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 9010
     *
     * @var string
     */
    public $logItemId;

    /**
     * @example F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA
     *
     * @var string
     */
    public $logRequestId;

    /**
     * @example 1010
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListFeatureConsistencyCheckJobFeatureReportsRequest
     */
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
