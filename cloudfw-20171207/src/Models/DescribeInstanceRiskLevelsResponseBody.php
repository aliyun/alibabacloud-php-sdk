<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInstanceRiskLevelsResponseBody\instanceRisks;
use AlibabaCloud\Tea\Model;

class DescribeInstanceRiskLevelsResponseBody extends Model
{
    /**
     * @var instanceRisks[]
     */
    public $instanceRisks;

    /**
     * @example 9AABB1B7-C81F-5158-9EF9-B2DD5D3DA014
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceRisks' => 'InstanceRisks',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceRisks) {
            $res['InstanceRisks'] = [];
            if (null !== $this->instanceRisks && \is_array($this->instanceRisks)) {
                $n = 0;
                foreach ($this->instanceRisks as $item) {
                    $res['InstanceRisks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceRiskLevelsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceRisks'])) {
            if (!empty($map['InstanceRisks'])) {
                $model->instanceRisks = [];
                $n                    = 0;
                foreach ($map['InstanceRisks'] as $item) {
                    $model->instanceRisks[$n++] = null !== $item ? instanceRisks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
