<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QuerySoundRecordResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @description 返回状态码 0000表示成功 其他表示失败
     *
     * @example 0000
     *
     * @var string
     */
    public $code;

    /**
     * @description 通话录音url路径，最大长度1000，有效期1小时
     *
     * @example http://www.***.com/temepl/a.mp3
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description 返回信息
     *
     * @example 成功
     *
     * @var string
     */
    public $message;

    /**
     * @description 返回是否成功 true  表示成功 false表示失败
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'code'               => 'Code',
        'fileUrl'            => 'FileUrl',
        'message'            => 'Message',
        'success'            => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySoundRecordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
