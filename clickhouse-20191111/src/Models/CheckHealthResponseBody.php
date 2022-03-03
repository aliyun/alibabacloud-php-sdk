<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class CheckHealthResponseBody extends Model
{
    /**
     * @var string
     */
    public $info;

    /**
     * @var bool
     */
    public $isHealthy;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'info'      => 'Info',
        'isHealthy' => 'IsHealthy',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }
        if (null !== $this->isHealthy) {
            $res['IsHealthy'] = $this->isHealthy;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckHealthResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }
        if (isset($map['IsHealthy'])) {
            $model->isHealthy = $map['IsHealthy'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
