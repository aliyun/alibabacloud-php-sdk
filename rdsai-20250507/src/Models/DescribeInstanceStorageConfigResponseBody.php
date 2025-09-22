<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceStorageConfigResponseBody\configList;

class DescribeInstanceStorageConfigResponseBody extends Model
{
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
    public $requestId;
    protected $_name = [
        'configList' => 'ConfigList',
        'instanceName' => 'InstanceName',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->configList)) {
            Model::validateArray($this->configList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
