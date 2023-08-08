<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterUserKubeconfigRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $privateIpAddress;

    /**
     * @example 15
     *
     * @var int
     */
    public $temporaryDurationMinutes;
    protected $_name = [
        'privateIpAddress'         => 'PrivateIpAddress',
        'temporaryDurationMinutes' => 'TemporaryDurationMinutes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->temporaryDurationMinutes) {
            $res['TemporaryDurationMinutes'] = $this->temporaryDurationMinutes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterUserKubeconfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['TemporaryDurationMinutes'])) {
            $model->temporaryDurationMinutes = $map['TemporaryDurationMinutes'];
        }

        return $model;
    }
}
