<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceRiskNumResponseBody\instanceRiskNum;

use AlibabaCloud\Tea\Model;

class instanceItem extends Model
{
    /**
     * @example i-wz9fdluqx20mp2x7****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example f2d6e901-1004-4ca8-9dae-53ec04a9****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'uuid'       => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
