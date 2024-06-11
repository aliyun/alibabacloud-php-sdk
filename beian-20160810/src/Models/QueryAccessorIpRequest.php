<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Beian\V20160810\Models;

use AlibabaCloud\Tea\Model;

class QueryAccessorIpRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $caller;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $ip;
    protected $_name = [
        'caller' => 'Caller',
        'ip'     => 'Ip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAccessorIpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
