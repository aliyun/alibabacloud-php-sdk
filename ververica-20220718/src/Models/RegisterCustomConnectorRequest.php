<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class RegisterCustomConnectorRequest extends Model
{
    /**
     * @description The URL in which the JAR package of the custom connector is stored. The platform must be able to access this address.
     *
     * This parameter is required.
     * @example oss://flink/connector/mysql123
     *
     * @var string
     */
    public $jarUrl;
    protected $_name = [
        'jarUrl' => 'jarUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jarUrl) {
            $res['jarUrl'] = $this->jarUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterCustomConnectorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['jarUrl'])) {
            $model->jarUrl = $map['jarUrl'];
        }

        return $model;
    }
}
