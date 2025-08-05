<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInstanceRiskLevelsRequest;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The instance ID of your Cloud Firewall.
     *
     * @example vipcloudfw-cn-7mz2fj8nm0u
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The public IP addresses of instances.
     *
     * @var string[]
     */
    public $internetIp;

    /**
     * @description The private IP address of the instance.
     *
     * @example 172.17.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The UUID of the instance.
     *
     * @example 181ad081-e4f2-4e3e-b925-03b67f648397
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'uuid' => 'Uuid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InternetIp'])) {
            if (!empty($map['InternetIp'])) {
                $model->internetIp = $map['InternetIp'];
            }
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
