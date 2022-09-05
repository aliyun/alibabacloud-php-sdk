<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingResponseBody\header;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingResponseBody\result;
use AlibabaCloud\Tea\Model;

class ListAdvertisingResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorcode;

    /**
     * @var string
     */
    public $errormsg;

    /**
     * @var string[]
     */
    public $ext;

    /**
     * @var header
     */
    public $header;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var result
     */
    public $result;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorcode' => 'Errorcode',
        'errormsg'  => 'Errormsg',
        'ext'       => 'Ext',
        'header'    => 'Header',
        'requestId' => 'RequestId',
        'result'    => 'Result',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorcode) {
            $res['Errorcode'] = $this->errorcode;
        }
        if (null !== $this->errormsg) {
            $res['Errormsg'] = $this->errormsg;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->header) {
            $res['Header'] = null !== $this->header ? $this->header->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return ListAdvertisingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Errorcode'])) {
            $model->errorcode = $map['Errorcode'];
        }
        if (isset($map['Errormsg'])) {
            $model->errormsg = $map['Errormsg'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['Header'])) {
            $model->header = header::fromMap($map['Header']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
