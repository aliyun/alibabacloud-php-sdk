<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\SDK\Imarketing\V20220704\Models\ConfirmSampleShippedResponseBody\header;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ConfirmSampleShippedResponseBody\result;
use AlibabaCloud\Tea\Model;

class ConfirmSampleShippedResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var mixed[]
     */
    public $ext;

    /**
     * @var header
     */
    public $header;

    /**
     * @var result
     */
    public $result;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMsg'  => 'ErrorMsg',
        'ext'       => 'Ext',
        'header'    => 'Header',
        'result'    => 'Result',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->header) {
            $res['Header'] = null !== $this->header ? $this->header->toMap() : null;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfirmSampleShippedResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['Header'])) {
            $model->header = header::fromMap($map['Header']);
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
