<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceResponseBody\dryRunResult;

class UpdateServiceResponseBody extends Model
{
    /**
     * @var dryRunResult
     */
    public $dryRunResult;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dryRunResult' => 'DryRunResult',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dryRunResult) {
            $this->dryRunResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dryRunResult) {
            $res['DryRunResult'] = null !== $this->dryRunResult ? $this->dryRunResult->toArray($noStream) : $this->dryRunResult;
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
        if (isset($map['DryRunResult'])) {
            $model->dryRunResult = dryRunResult::fromMap($map['DryRunResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
