<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTopNMetricResponseBody\securityEventTopNValues;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTopNMetricResponseBody\topNMetaData;

class DescribeSecurityEventTopNMetricResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityEventTopNValues[]
     */
    public $securityEventTopNValues;

    /**
     * @var topNMetaData
     */
    public $topNMetaData;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityEventTopNValues' => 'SecurityEventTopNValues',
        'topNMetaData' => 'TopNMetaData',
    ];

    public function validate()
    {
        if (\is_array($this->securityEventTopNValues)) {
            Model::validateArray($this->securityEventTopNValues);
        }
        if (null !== $this->topNMetaData) {
            $this->topNMetaData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityEventTopNValues) {
            if (\is_array($this->securityEventTopNValues)) {
                $res['SecurityEventTopNValues'] = [];
                $n1 = 0;
                foreach ($this->securityEventTopNValues as $item1) {
                    $res['SecurityEventTopNValues'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->topNMetaData) {
            $res['TopNMetaData'] = null !== $this->topNMetaData ? $this->topNMetaData->toArray($noStream) : $this->topNMetaData;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityEventTopNValues'])) {
            if (!empty($map['SecurityEventTopNValues'])) {
                $model->securityEventTopNValues = [];
                $n1 = 0;
                foreach ($map['SecurityEventTopNValues'] as $item1) {
                    $model->securityEventTopNValues[$n1++] = securityEventTopNValues::fromMap($item1);
                }
            }
        }

        if (isset($map['TopNMetaData'])) {
            $model->topNMetaData = topNMetaData::fromMap($map['TopNMetaData']);
        }

        return $model;
    }
}
