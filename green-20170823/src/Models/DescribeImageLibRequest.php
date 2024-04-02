<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageLibRequest extends Model
{
    /**
     * @example open_api
     *
     * @var string
     */
    public $serviceModule;

    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'serviceModule' => 'ServiceModule',
        'sourceIp'      => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceModule) {
            $res['ServiceModule'] = $this->serviceModule;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageLibRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceModule'])) {
            $model->serviceModule = $map['ServiceModule'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
