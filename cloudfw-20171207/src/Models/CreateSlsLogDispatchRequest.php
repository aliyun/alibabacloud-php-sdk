<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class CreateSlsLogDispatchRequest extends Model
{
    /**
     * @description The region ID of the Simple Log Service project.
     *
     * @example ap-southeast-1
     *
     * @var string
     */
    public $slsRegionId;

    /**
     * @description The log retention period. Unit: days.
     *
     * @example 20
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'slsRegionId' => 'SlsRegionId',
        'ttl' => 'Ttl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->slsRegionId) {
            $res['SlsRegionId'] = $this->slsRegionId;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSlsLogDispatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlsRegionId'])) {
            $model->slsRegionId = $map['SlsRegionId'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
