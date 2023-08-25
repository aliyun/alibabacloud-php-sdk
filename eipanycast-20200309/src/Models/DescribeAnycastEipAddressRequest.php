<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Tea\Model;

class DescribeAnycastEipAddressRequest extends Model
{
    /**
     * @description The ID of the Anycast EIP.
     *
     * >  You must specify at least one of **Ip** and **AnycastId**.
     * @example aeip-bp1ix34fralt4ykf3****
     *
     * @var string
     */
    public $anycastId;

    /**
     * @description The ID of the cloud resource with which the Anycast EIP is associated.
     *
     * @example lb-2zebb08phyczzawe****
     *
     * @var string
     */
    public $bindInstanceId;

    /**
     * @description The IP address of the Anycast EIP.
     *
     * >  You must specify at least one of **Ip** and **AnycastId**.
     * @example 139.95.XX.XX
     *
     * @var string
     */
    public $ip;
    protected $_name = [
        'anycastId'      => 'AnycastId',
        'bindInstanceId' => 'BindInstanceId',
        'ip'             => 'Ip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anycastId) {
            $res['AnycastId'] = $this->anycastId;
        }
        if (null !== $this->bindInstanceId) {
            $res['BindInstanceId'] = $this->bindInstanceId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAnycastEipAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnycastId'])) {
            $model->anycastId = $map['AnycastId'];
        }
        if (isset($map['BindInstanceId'])) {
            $model->bindInstanceId = $map['BindInstanceId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
