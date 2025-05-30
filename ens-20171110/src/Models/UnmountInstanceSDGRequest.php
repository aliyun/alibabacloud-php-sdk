<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class UnmountInstanceSDGRequest extends Model
{
    /**
     * @description The IDs of the instances.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The ID of the SDG.
     *
     * This parameter is required.
     *
     * @example sdg-xxxx
     *
     * @var string
     */
    public $SDGId;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'SDGId' => 'SDGId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnmountInstanceSDGRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['SDGId'])) {
            $model->SDGId = $map['SDGId'];
        }

        return $model;
    }
}
