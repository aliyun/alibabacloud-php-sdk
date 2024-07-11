<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ModifyDiskWarningLineRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ld-m5eznlga4k5bcxxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @example 80
     *
     * @var int
     */
    public $warningLine;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'warningLine' => 'WarningLine',
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
        if (null !== $this->warningLine) {
            $res['WarningLine'] = $this->warningLine;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDiskWarningLineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['WarningLine'])) {
            $model->warningLine = $map['WarningLine'];
        }

        return $model;
    }
}
