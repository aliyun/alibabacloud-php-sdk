<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class DescribeModelServiceResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $aiNodes;

    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var mixed[]
     */
    public $modelParams;

    /**
     * @var string
     */
    public $modelServiceId;

    /**
     * @var string
     */
    public $privateConnectUrl;

    /**
     * @var string
     */
    public $publicConnectUrl;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $securityIpList;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'aiNodes' => 'AiNodes',
        'apiKey' => 'ApiKey',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'modelName' => 'ModelName',
        'modelParams' => 'ModelParams',
        'modelServiceId' => 'ModelServiceId',
        'privateConnectUrl' => 'PrivateConnectUrl',
        'publicConnectUrl' => 'PublicConnectUrl',
        'requestId' => 'RequestId',
        'securityIpList' => 'SecurityIpList',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->aiNodes)) {
            Model::validateArray($this->aiNodes);
        }
        if (\is_array($this->modelParams)) {
            Model::validateArray($this->modelParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiNodes) {
            if (\is_array($this->aiNodes)) {
                $res['AiNodes'] = [];
                $n1 = 0;
                foreach ($this->aiNodes as $item1) {
                    $res['AiNodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->modelParams) {
            if (\is_array($this->modelParams)) {
                $res['ModelParams'] = [];
                foreach ($this->modelParams as $key1 => $value1) {
                    $res['ModelParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->modelServiceId) {
            $res['ModelServiceId'] = $this->modelServiceId;
        }

        if (null !== $this->privateConnectUrl) {
            $res['PrivateConnectUrl'] = $this->privateConnectUrl;
        }

        if (null !== $this->publicConnectUrl) {
            $res['PublicConnectUrl'] = $this->publicConnectUrl;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityIpList) {
            $res['SecurityIpList'] = $this->securityIpList;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AiNodes'])) {
            if (!empty($map['AiNodes'])) {
                $model->aiNodes = [];
                $n1 = 0;
                foreach ($map['AiNodes'] as $item1) {
                    $model->aiNodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['ModelParams'])) {
            if (!empty($map['ModelParams'])) {
                $model->modelParams = [];
                foreach ($map['ModelParams'] as $key1 => $value1) {
                    $model->modelParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['ModelServiceId'])) {
            $model->modelServiceId = $map['ModelServiceId'];
        }

        if (isset($map['PrivateConnectUrl'])) {
            $model->privateConnectUrl = $map['PrivateConnectUrl'];
        }

        if (isset($map['PublicConnectUrl'])) {
            $model->publicConnectUrl = $map['PublicConnectUrl'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityIpList'])) {
            $model->securityIpList = $map['SecurityIpList'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
