<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class RestartInstanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ld-bp150tns0sjxs****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example THRIFT
     *
     * @var string
     */
    public $components;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'components' => 'Components',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->components) {
            $res['Components'] = $this->components;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestartInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Components'])) {
            $model->components = $map['Components'];
        }

        return $model;
    }
}
