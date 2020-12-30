<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class CallOnlinePrivacyNumberRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $telA;

    /**
     * @var string
     */
    public $telB;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'telA'       => 'TelA',
        'telB'       => 'TelB',
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
        if (null !== $this->telA) {
            $res['TelA'] = $this->telA;
        }
        if (null !== $this->telB) {
            $res['TelB'] = $this->telB;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CallOnlinePrivacyNumberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TelA'])) {
            $model->telA = $map['TelA'];
        }
        if (isset($map['TelB'])) {
            $model->telB = $map['TelB'];
        }

        return $model;
    }
}
