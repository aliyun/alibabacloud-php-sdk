<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceResponseBody\dryRunResult;
use AlibabaCloud\Tea\Model;

class UpdateServiceResponseBody extends Model
{
    /**
     * @description The dry run result.
     *
     * @var dryRunResult
     */
    public $dryRunResult;

    /**
     * @description The hosted O\\&M configurations.
     *
     * @example DF0F666F-FBBC-55C3-A368-C955DE7B4839
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dryRunResult' => 'DryRunResult',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRunResult) {
            $res['DryRunResult'] = null !== $this->dryRunResult ? $this->dryRunResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRunResult'])) {
            $model->dryRunResult = dryRunResult::fromMap($map['DryRunResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
