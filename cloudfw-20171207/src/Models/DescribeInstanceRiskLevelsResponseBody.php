<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInstanceRiskLevelsResponseBody\instanceRisks;

class DescribeInstanceRiskLevelsResponseBody extends Model
{
    /**
     * @var instanceRisks[]
     */
    public $instanceRisks;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceRisks' => 'InstanceRisks',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceRisks)) {
            Model::validateArray($this->instanceRisks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceRisks) {
            if (\is_array($this->instanceRisks)) {
                $res['InstanceRisks'] = [];
                $n1 = 0;
                foreach ($this->instanceRisks as $item1) {
                    $res['InstanceRisks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['InstanceRisks'])) {
            if (!empty($map['InstanceRisks'])) {
                $model->instanceRisks = [];
                $n1 = 0;
                foreach ($map['InstanceRisks'] as $item1) {
                    $model->instanceRisks[$n1++] = instanceRisks::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
