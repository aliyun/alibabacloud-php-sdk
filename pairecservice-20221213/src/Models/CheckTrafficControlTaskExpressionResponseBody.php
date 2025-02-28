<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class CheckTrafficControlTaskExpressionResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isValie;
    /**
     * @var string
     */
    public $reason;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isValie'   => 'IsValie',
        'reason'    => 'Reason',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isValie) {
            $res['IsValie'] = $this->isValie;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (isset($map['IsValie'])) {
            $model->isValie = $map['IsValie'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
