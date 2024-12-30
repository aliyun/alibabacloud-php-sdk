<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskInfoResponseBody\taskInfo;

use AlibabaCloud\Tea\Model;

class sparkClientInfo extends Model
{
    /**
     * @example abc
     *
     * @var string
     */
    public $sparkClientVersion;
    protected $_name = [
        'sparkClientVersion' => 'SparkClientVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sparkClientVersion) {
            $res['SparkClientVersion'] = $this->sparkClientVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sparkClientInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SparkClientVersion'])) {
            $model->sparkClientVersion = $map['SparkClientVersion'];
        }

        return $model;
    }
}
