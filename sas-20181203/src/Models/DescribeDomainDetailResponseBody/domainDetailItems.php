<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainDetailResponseBody;

use AlibabaCloud\Tea\Model;

class domainDetailItems extends Model
{
    /**
     * @description The type of the domain asset. Valid values:
     *
     *   **0**: an Elastic Compute Service (ECS) instance
     *   **1**: a Server Load Balancer (SLB) instance
     *   **2**: a Network Address Translation (NAT) gateway
     *   **3**: an ApsaraDB RDS instance
     *   **4**: an ApsaraDB for MongoDB instance
     *
     * @example 0
     *
     * @var string
     */
    public $assetType;

    /**
     * @description The instance ID of the asset.
     *
     * @example i-m5e6w7dzsktt6mz4***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the asset.
     *
     * @example iZm5e6w7dzsktt6mz4yimeZ-6****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the asset.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the asset.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The instance UUID of the domain asset.
     *
     * @example lb-bp1g9dohoyin9cjhn6****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'assetType'    => 'AssetType',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'internetIp'   => 'InternetIp',
        'intranetIp'   => 'IntranetIp',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
     * @return domainDetailItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
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
