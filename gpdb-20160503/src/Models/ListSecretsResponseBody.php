<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSecretsResponseBody\secrets;
use AlibabaCloud\Tea\Model;

class ListSecretsResponseBody extends Model
{
    /**
     * @description The number of access credentials.
     *
     * @example 4
     *
     * @var int
     */
    public $count;

    /**
     * @description The returned message.
     *
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example ABB39CC3-4488-4857-905D-2E4A051D0521
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The queried access credentials.
     *
     * @var secrets
     */
    public $secrets;

    /**
     * @description The status of the operation. Valid values:
     *
     *   **success**
     *   **fail**
     *
     * @example success
     *
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
    }

    public function toMap()
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
            $res['Secrets'] = null !== $this->secrets ? $this->secrets->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSecretsResponseBody
     */
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
