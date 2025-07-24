<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CheckServiceDeployableResponseBody\checkResults;
use AlibabaCloud\Tea\Model;

class CheckServiceDeployableResponseBody extends Model
{
    /**
     * @description Inspection result.
     *
     * @var checkResults[]
     */
    public $checkResults;

    /**
     * @description Id of the request
     *
     * @example 06BF8F22-02DC-4750-83DF-3FFC11C065EA
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkResults' => 'CheckResults',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkResults) {
            $res['CheckResults'] = [];
            if (null !== $this->checkResults && \is_array($this->checkResults)) {
                $n = 0;
                foreach ($this->checkResults as $item) {
                    $res['CheckResults'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return CheckServiceDeployableResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckResults'])) {
            if (!empty($map['CheckResults'])) {
                $model->checkResults = [];
                $n = 0;
                foreach ($map['CheckResults'] as $item) {
                    $model->checkResults[$n++] = null !== $item ? checkResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
