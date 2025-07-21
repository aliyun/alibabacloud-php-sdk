<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class DedicatedIpChangeWarmupTypeRequest extends Model
{
    /**
     * @description Dedicated IP ID
     *
     * @example xxx
     *
     * @var string
     */
    public $id;

    /**
     * @description Warmup method
     *
     * @example sysCusStream
     *
     * @var string
     */
    public $warmupType;
    protected $_name = [
        'id' => 'Id',
        'warmupType' => 'WarmupType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->warmupType) {
            $res['WarmupType'] = $this->warmupType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DedicatedIpChangeWarmupTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['WarmupType'])) {
            $model->warmupType = $map['WarmupType'];
        }

        return $model;
    }
}
