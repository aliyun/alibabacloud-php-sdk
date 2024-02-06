<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceAutoRenewAttributeResponseBody\instanceRenewAttributes;

use AlibabaCloud\Tea\Model;

class instanceRenewAttribute extends Model
{
    /**
     * @description The renewal type of the instance.
     *
     *   **true**: enables auto-renewal.
     *   **false**: disables auto-renewal.
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenewal;

    /**
     * @description The unit of the auto-renewal period.
     *
     * @example 0
     *
     * @var string
     */
    public $duration;

    /**
     * @description The ID of the instance.
     *
     * @example i-5ci7l7k1m9m2zmhp4iw3o****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'autoRenewal' => 'AutoRenewal',
        'duration'    => 'Duration',
        'instanceId'  => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceRenewAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
