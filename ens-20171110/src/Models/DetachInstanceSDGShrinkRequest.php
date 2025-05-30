<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DetachInstanceSDGShrinkRequest extends Model
{
    /**
     * @description The IDs of the instances.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @description The ID of the SDG.
     *
     * This parameter is required.
     *
     * @example sdg-xxxxx
     *
     * @var string
     */
    public $SDGId;
    protected $_name = [
        'instanceIdsShrink' => 'InstanceIds',
        'SDGId' => 'SDGId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
        }
        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachInstanceSDGShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            $model->instanceIdsShrink = $map['InstanceIds'];
        }
        if (isset($map['SDGId'])) {
            $model->SDGId = $map['SDGId'];
        }

        return $model;
    }
}
