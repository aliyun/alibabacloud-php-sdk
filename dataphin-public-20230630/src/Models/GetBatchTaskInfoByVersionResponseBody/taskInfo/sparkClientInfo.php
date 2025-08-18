<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskInfoByVersionResponseBody\taskInfo;

use AlibabaCloud\Dara\Model;

class sparkClientInfo extends Model
{
    /**
     * @var string
     */
    public $sparkClientVersion;
    protected $_name = [
        'sparkClientVersion' => 'SparkClientVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sparkClientVersion) {
            $res['SparkClientVersion'] = $this->sparkClientVersion;
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
        if (isset($map['SparkClientVersion'])) {
            $model->sparkClientVersion = $map['SparkClientVersion'];
        }

        return $model;
    }
}
