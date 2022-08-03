<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class LoggingEnabled extends Model
{
    /**
     * @var string
     */
    public $targetBucket;

    /**
     * @var string
     */
    public $targetPrefix;
    protected $_name = [
        'targetBucket' => 'TargetBucket',
        'targetPrefix' => 'TargetPrefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetBucket) {
            $res['TargetBucket'] = $this->targetBucket;
        }
        if (null !== $this->targetPrefix) {
            $res['TargetPrefix'] = $this->targetPrefix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LoggingEnabled
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetBucket'])) {
            $model->targetBucket = $map['TargetBucket'];
        }
        if (isset($map['TargetPrefix'])) {
            $model->targetPrefix = $map['TargetPrefix'];
        }

        return $model;
    }
}
