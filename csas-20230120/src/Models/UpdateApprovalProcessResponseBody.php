<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessResponseBody\process;
use AlibabaCloud\Tea\Model;

class UpdateApprovalProcessResponseBody extends Model
{
    /**
     * @var process
     */
    public $process;

    /**
     * @example 7E9D7ACD-53D5-56EF-A913-79D148D06299
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'process' => 'Process',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->process) {
            $res['Process'] = null !== $this->process ? $this->process->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApprovalProcessResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Process'])) {
            $model->process = process::fromMap($map['Process']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
