<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CreateTicket4CopilotResponseBody extends Model
{
    /**
     * @description Request ID.
     *
     * @example D787************05DF8D885
     *
     * @var string
     */
    public $requestId;

    /**
     * @description ID of the Smart Q module to be embedded.
     *
     * @example f5eeb52e-d9c2-4a8b-80e3-47ab55c2****
     *
     * @var string
     */
    public $result;

    /**
     * @description Indicates whether the request was successful. Possible values:
     * - true: The request succeeded
     * - false: The request failed
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId' => 'RequestId',
        'result' => 'Result',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTicket4CopilotResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
