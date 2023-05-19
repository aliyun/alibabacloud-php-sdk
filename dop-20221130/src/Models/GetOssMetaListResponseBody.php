<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dop\V20221130\Models;

use AlibabaCloud\SDK\Dop\V20221130\Models\GetOssMetaListResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetOssMetaListResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @example [     {         "fileSize": "6742533118",         "rows": "60183883",         "class": "com.alibaba.umeng.deliver.dto.FileMetaDTO",         "fileNames": [           "4787160477371098888/umeng/dwd_ump_log_uapp_event_json_di/ds=20221226/59f27cc_111_2B642148.orc"         ],         "ds": "20221226"     } ]
     *
     * @var data[]
     */
    public $data;

    /**
     * @example SysErr
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example 系统错误
     *
     * @var string
     */
    public $msg;

    /**
     * @example 2127968716722315678728318eaf15
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'errorCode' => 'ErrorCode',
        'msg'       => 'Msg',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssMetaListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
