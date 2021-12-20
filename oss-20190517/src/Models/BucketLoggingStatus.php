<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class BucketLoggingStatus extends Model
{
    /**
     * @var LoggingEnabled
     */
    public $loggingEnabled;
    protected $_name = [
        'loggingEnabled' => 'LoggingEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loggingEnabled) {
            $res['LoggingEnabled'] = null !== $this->loggingEnabled ? $this->loggingEnabled->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BucketLoggingStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoggingEnabled'])) {
            $model->loggingEnabled = LoggingEnabled::fromMap($map['LoggingEnabled']);
        }

        return $model;
    }
}
