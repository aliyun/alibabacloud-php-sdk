<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceRebootStatusResponseBody;

use AlibabaCloud\Tea\Model;

class rebootStatuses extends Model
{
    /**
     * @description The error code that is returned when the server failed to be restarted. Valid values:
     *
     *   **10001**: The restart command failed to be sent.
     *   **10002**: The restart operation failed.
     *   **10003**: A timeout error occurs.
     *
     * @example 10001
     *
     * @var string
     */
    public $code;

    /**
     * @description The message that is returned when the server failed to be restarted.
     *
     * @example push failed
     *
     * @var string
     */
    public $msg;

    /**
     * @description The status of the server. Valid values:
     *
     *   **0**: The server is being restarted.
     *   **1**: The server is restarted.
     *   **2**: The server failed to be restarted.
     *
     * @example 2
     *
     * @var int
     */
    public $rebootStatus;

    /**
     * @description The UUID of the server.
     *
     * @example 9b59c2d6-0967-46e3-ad7b-152227c****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'code'         => 'Code',
        'msg'          => 'Msg',
        'rebootStatus' => 'RebootStatus',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->rebootStatus) {
            $res['RebootStatus'] = $this->rebootStatus;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rebootStatuses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['RebootStatus'])) {
            $model->rebootStatus = $map['RebootStatus'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
