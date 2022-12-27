<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RemoveVSwitchesFromEpnInstanceRequest extends Model
{
    /**
     * @example epn-****
     *
     * @var string
     */
    public $EPNInstanceId;

    /**
     * @example VSwitchesInfo=[{"VSwitchId":"vs-ixxxx"},{"VSwitchId":"vs-ixxxx"}]
     *
     * @var string
     */
    public $vSwitchesInfo;
    protected $_name = [
        'EPNInstanceId' => 'EPNInstanceId',
        'vSwitchesInfo' => 'VSwitchesInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->EPNInstanceId) {
            $res['EPNInstanceId'] = $this->EPNInstanceId;
        }
        if (null !== $this->vSwitchesInfo) {
            $res['VSwitchesInfo'] = $this->vSwitchesInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveVSwitchesFromEpnInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EPNInstanceId'])) {
            $model->EPNInstanceId = $map['EPNInstanceId'];
        }
        if (isset($map['VSwitchesInfo'])) {
            $model->vSwitchesInfo = $map['VSwitchesInfo'];
        }

        return $model;
    }
}
