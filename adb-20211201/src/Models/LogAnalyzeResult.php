<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class LogAnalyzeResult extends Model
{
    /**
     * @var string
     */
    public $appErrorAdvice;

    /**
     * @example EXCEEDED_QUOTA
     *
     * @var string
     */
    public $appErrorCode;

    /**
     * @example exception: xxxx
     *
     * @var string
     */
    public $appErrorLog;
    protected $_name = [
        'appErrorAdvice' => 'AppErrorAdvice',
        'appErrorCode'   => 'AppErrorCode',
        'appErrorLog'    => 'AppErrorLog',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appErrorAdvice) {
            $res['AppErrorAdvice'] = $this->appErrorAdvice;
        }
        if (null !== $this->appErrorCode) {
            $res['AppErrorCode'] = $this->appErrorCode;
        }
        if (null !== $this->appErrorLog) {
            $res['AppErrorLog'] = $this->appErrorLog;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LogAnalyzeResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppErrorAdvice'])) {
            $model->appErrorAdvice = $map['AppErrorAdvice'];
        }
        if (isset($map['AppErrorCode'])) {
            $model->appErrorCode = $map['AppErrorCode'];
        }
        if (isset($map['AppErrorLog'])) {
            $model->appErrorLog = $map['AppErrorLog'];
        }

        return $model;
    }
}
