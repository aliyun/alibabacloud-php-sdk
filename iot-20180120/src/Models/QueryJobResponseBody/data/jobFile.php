<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponseBody\data;

use AlibabaCloud\Tea\Model;

class jobFile extends Model
{
    /**
     * @example https://iotx-***.oss-cn-shanghai.aliyuncs.com/job***\/7u***.sh?Expires=16***&OSSAccessKeyId=LTA***&Signature=TTTejn***
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @example TTTejn***
     *
     * @var string
     */
    public $sign;

    /**
     * @example SHA256
     *
     * @var string
     */
    public $signMethod;
    protected $_name = [
        'fileUrl'    => 'FileUrl',
        'sign'       => 'Sign',
        'signMethod' => 'SignMethod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }
        if (null !== $this->signMethod) {
            $res['SignMethod'] = $this->signMethod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobFile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }
        if (isset($map['SignMethod'])) {
            $model->signMethod = $map['SignMethod'];
        }

        return $model;
    }
}
