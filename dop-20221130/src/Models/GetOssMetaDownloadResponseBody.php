<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dop\V20221130\Models;

use AlibabaCloud\Tea\Model;

class GetOssMetaDownloadResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @example https://ump-dc.oss-cn-beijing.aliyuncs.com/4787165528263387359/umeng/dwd_ump_log_uweb_event_di/ds%3D20220725/4d37337_6_10A60974.orc?Expires=1672139018&OSSAccessKeyId=TMP.3Kfn35DYBphrFfjG5mys6Xe9YPmH2y86hNENwkHKywMjyxRjZwMCTuaTRMuEXovEAsrsss6RoULqsHReJoS3vsdVyqW7YY&Signature=6i5udRnsa6P4uEARdGsSYW8NiBU%3D
     *
     * @var string[]
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
            $res['Data'] = $this->data;
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
     * @return GetOssMetaDownloadResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = $map['Data'];
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
