<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;

class CheckModifyConfigNeedRestartResponseBody extends Model
{
    /**
     * @var bool
     */
    public $needRestart;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'needRestart' => 'NeedRestart',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->needRestart) {
            $res['NeedRestart'] = $this->needRestart;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['NeedRestart'])) {
            $model->needRestart = $map['NeedRestart'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
