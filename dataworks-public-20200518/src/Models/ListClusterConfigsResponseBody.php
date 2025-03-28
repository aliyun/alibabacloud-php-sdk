<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class ListClusterConfigsResponseBody extends Model
{
    /**
     * @var ClusterConfig[]
     */
    public $clusterConfigs;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'clusterConfigs' => 'ClusterConfigs',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->clusterConfigs)) {
            Model::validateArray($this->clusterConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterConfigs) {
            if (\is_array($this->clusterConfigs)) {
                $res['ClusterConfigs'] = [];
                $n1 = 0;
                foreach ($this->clusterConfigs as $item1) {
                    $res['ClusterConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['ClusterConfigs'])) {
            if (!empty($map['ClusterConfigs'])) {
                $model->clusterConfigs = [];
                $n1 = 0;
                foreach ($map['ClusterConfigs'] as $item1) {
                    $model->clusterConfigs[$n1++] = ClusterConfig::fromMap($item1);
                }
            }
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
