<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetApprovalProcessResponseBody\process;

class GetApprovalProcessResponseBody extends Model
{
    /**
     * @var process
     */
    public $process;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'process'   => 'Process',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->process) {
            $this->process->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->process) {
            $res['Process'] = null !== $this->process ? $this->process->toArray($noStream) : $this->process;
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
        if (isset($map['Process'])) {
            $model->process = process::fromMap($map['Process']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
