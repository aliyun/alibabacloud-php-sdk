<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class ListDomainsByLogConfigIdRequest extends Model
{
    /**
     * @description >  The maximum number of times that each user can call this operation per second is 100.
     *
     * @example 123
     *
     * @var string
     */
    public $configId;
    protected $_name = [
        'configId' => 'ConfigId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDomainsByLogConfigIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        return $model;
    }
}
