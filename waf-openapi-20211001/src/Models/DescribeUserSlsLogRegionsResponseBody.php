<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserSlsLogRegionsResponseBody extends Model
{
    /**
     * @description The region IDs.
     *
     * @var string[]
     */
    public $logRegions;

    /**
     * @description The request ID.
     *
     * @example 9D11AC3A-A10C-56E7-A342-E87EC892****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logRegions' => 'LogRegions',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logRegions) {
            $res['LogRegions'] = $this->logRegions;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserSlsLogRegionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogRegions'])) {
            if (!empty($map['LogRegions'])) {
                $model->logRegions = $map['LogRegions'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
