<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListModelServicesResponseBody;

use AlibabaCloud\Dara\Model;

class modelServices extends Model
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
     * @var string[]
     */
    public $modelParams;

    /**
     * @var string
     */
    public $modelServiceId;

    /**
     * @var string
     */
    public $privateConnUrl;

    /**
     * @var string
     */
    public $publicConnUrl;

    /**
     * @var string
     */
    public $securityIPList;

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
        'privateConnUrl' => 'PrivateConnUrl',
        'publicConnUrl' => 'PublicConnUrl',
        'securityIPList' => 'SecurityIPList',
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

        if (null !== $this->privateConnUrl) {
            $res['PrivateConnUrl'] = $this->privateConnUrl;
        }

        if (null !== $this->publicConnUrl) {
            $res['PublicConnUrl'] = $this->publicConnUrl;
        }

        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
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

        if (isset($map['PrivateConnUrl'])) {
            $model->privateConnUrl = $map['PrivateConnUrl'];
        }

        if (isset($map['PublicConnUrl'])) {
            $model->publicConnUrl = $map['PublicConnUrl'];
        }

        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
