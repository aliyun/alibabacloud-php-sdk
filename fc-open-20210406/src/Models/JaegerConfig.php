<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class JaegerConfig extends Model
{
    /**
     * @var string
     */
    public $endpoint;
    protected $_name = [
        'endpoint' => 'endpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JaegerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        return $model;
    }
}
