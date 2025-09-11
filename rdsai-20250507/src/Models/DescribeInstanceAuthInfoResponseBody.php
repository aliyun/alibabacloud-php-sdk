<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceAuthInfoResponseBody\apiKeys;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceAuthInfoResponseBody\configList;

class DescribeInstanceAuthInfoResponseBody extends Model
{
    /**
     * @var apiKeys
     */
    public $apiKeys;

    /**
     * @var configList[]
     */
    public $configList;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $jwtSecret;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiKeys' => 'ApiKeys',
        'configList' => 'ConfigList',
        'instanceName' => 'InstanceName',
        'jwtSecret' => 'JwtSecret',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->apiKeys) {
            $this->apiKeys->validate();
        }
        if (\is_array($this->configList)) {
            Model::validateArray($this->configList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeys) {
            $res['ApiKeys'] = null !== $this->apiKeys ? $this->apiKeys->toArray($noStream) : $this->apiKeys;
        }

        if (null !== $this->configList) {
            if (\is_array($this->configList)) {
                $res['ConfigList'] = [];
                $n1 = 0;
                foreach ($this->configList as $item1) {
                    $res['ConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->jwtSecret) {
            $res['JwtSecret'] = $this->jwtSecret;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ApiKeys'])) {
            $model->apiKeys = apiKeys::fromMap($map['ApiKeys']);
        }

        if (isset($map['ConfigList'])) {
            if (!empty($map['ConfigList'])) {
                $model->configList = [];
                $n1 = 0;
                foreach ($map['ConfigList'] as $item1) {
                    $model->configList[$n1] = configList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['JwtSecret'])) {
            $model->jwtSecret = $map['JwtSecret'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
