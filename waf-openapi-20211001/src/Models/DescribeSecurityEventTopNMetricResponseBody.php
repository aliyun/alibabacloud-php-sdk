<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTopNMetricResponseBody\securityEventTopNValues;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTopNMetricResponseBody\topNMetaData;
use AlibabaCloud\Tea\Model;

class DescribeSecurityEventTopNMetricResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example D827FCFE-90A7-4330-9326-*****B4C7726
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The top N data entries returned.
     *
     * @var securityEventTopNValues[]
     */
    public $securityEventTopNValues;

    /**
     * @description The metadata of the data entries returned.
     *
     * @var topNMetaData
     */
    public $topNMetaData;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityEventTopNValues' => 'SecurityEventTopNValues',
        'topNMetaData' => 'TopNMetaData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityEventTopNValues) {
            $res['SecurityEventTopNValues'] = [];
            if (null !== $this->securityEventTopNValues && \is_array($this->securityEventTopNValues)) {
                $n = 0;
                foreach ($this->securityEventTopNValues as $item) {
                    $res['SecurityEventTopNValues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->topNMetaData) {
            $res['TopNMetaData'] = null !== $this->topNMetaData ? $this->topNMetaData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityEventTopNMetricResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityEventTopNValues'])) {
            if (!empty($map['SecurityEventTopNValues'])) {
                $model->securityEventTopNValues = [];
                $n = 0;
                foreach ($map['SecurityEventTopNValues'] as $item) {
                    $model->securityEventTopNValues[$n++] = null !== $item ? securityEventTopNValues::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TopNMetaData'])) {
            $model->topNMetaData = topNMetaData::fromMap($map['TopNMetaData']);
        }

        return $model;
    }
}
