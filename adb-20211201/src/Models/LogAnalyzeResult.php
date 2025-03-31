<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class LogAnalyzeResult extends Model
{
    /**
     * @var string
     */
    public $appErrorAdvice;

    /**
     * @var string
     */
    public $appErrorCode;

    /**
     * @var string
     */
    public $appErrorLog;
    protected $_name = [
        'appErrorAdvice' => 'AppErrorAdvice',
        'appErrorCode' => 'AppErrorCode',
        'appErrorLog' => 'AppErrorLog',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
