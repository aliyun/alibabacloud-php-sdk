<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSecretsResponseBody\secrets;

class ListSecretsResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var secrets
     */
    public $secrets;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'count'     => 'Count',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'secrets'   => 'Secrets',
        'status'    => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->secrets) {
            $this->secrets->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->secrets) {
            $res['Secrets'] = null !== $this->secrets ? $this->secrets->toArray($noStream) : $this->secrets;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Secrets'])) {
            $model->secrets = secrets::fromMap($map['Secrets']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
