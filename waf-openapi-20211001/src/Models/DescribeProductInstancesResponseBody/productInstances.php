<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeProductInstancesResponseBody;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeProductInstancesResponseBody\productInstances\accessPortAndProtocols;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeProductInstancesResponseBody\productInstances\resourcePorts;
use AlibabaCloud\Tea\Model;

class productInstances extends Model
{
    /**
     * @var string
     */
    public $accessInstanceId;

    /**
     * @var accessPortAndProtocols[]
     */
    public $accessPortAndProtocols;

    /**
     * @var int[]
     */
    public $accessPorts;

    /**
     * @description The ID of the Alibaba Cloud account to which the resource belongs.
     *
     * @example 1704********9107
     *
     * @var string
     */
    public $ownerUserId;

    /**
     * @var string
     */
    public $resourceInstanceAccessStatus;

    /**
     * @var string
     */
    public $resourceInstanceEdition;

    /**
     * @description The ID of the instance.
     *
     * @example i-2ze1tm4pvghp****cluv
     *
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @description The IP address of the instance that is added to WAF.
     *
     * @example 1.X.X.1
     *
     * @var string
     */
    public $resourceInstanceIp;

    /**
     * @description The name of the instance that is added to WAF.
     *
     * @example demoInstanceName
     *
     * @var string
     */
    public $resourceInstanceName;

    /**
     * @description The public IP address of the instance.
     *
     * @example 1.X.X.1
     *
     * @deprecated
     *
     * @var string
     */
    public $resourceIp;

    /**
     * @description The name of the instance.
     *
     * @example ecs-test
     *
     * @deprecated
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The information about the ports.
     *
     * @var resourcePorts[]
     */
    public $resourcePorts;

    /**
     * @description The cloud service to which the instance belongs. Valid values:
     *
     *   **clb4**: Layer 4 CLB.
     *   **clb7**: Layer 7 CLB.
     *   **ecs**: ECS.
     *
     * @example clb4
     *
     * @var string
     */
    public $resourceProduct;

    /**
     * @description The region ID of the instance. Valid values:
     *
     *   **cn-chengdu**: China (Chengdu).
     *   **cn-beijing**: China (Beijing).
     *   **cn-zhangjiakou**: China (Zhangjiakou).
     *   **cn-hangzhou**: China (Hangzhou).
     *   **cn-shanghai**: China (Shanghai).
     *   **cn-shenzhen**: China (Shenzhen).
     *   **cn-qingdao**: China (Qingdao).
     *   **cn-hongkong**: China (Hong Kong).
     *   **ap-southeast-3**: Malaysia (Kuala Lumpur).
     *   **ap-southeast-5**: Indonesia (Jakarta).
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $resourceRegionId;
    protected $_name = [
        'accessInstanceId' => 'AccessInstanceId',
        'accessPortAndProtocols' => 'AccessPortAndProtocols',
        'accessPorts' => 'AccessPorts',
        'ownerUserId' => 'OwnerUserId',
        'resourceInstanceAccessStatus' => 'ResourceInstanceAccessStatus',
        'resourceInstanceEdition' => 'ResourceInstanceEdition',
        'resourceInstanceId' => 'ResourceInstanceId',
        'resourceInstanceIp' => 'ResourceInstanceIp',
        'resourceInstanceName' => 'ResourceInstanceName',
        'resourceIp' => 'ResourceIp',
        'resourceName' => 'ResourceName',
        'resourcePorts' => 'ResourcePorts',
        'resourceProduct' => 'ResourceProduct',
        'resourceRegionId' => 'ResourceRegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessInstanceId) {
            $res['AccessInstanceId'] = $this->accessInstanceId;
        }
        if (null !== $this->accessPortAndProtocols) {
            $res['AccessPortAndProtocols'] = [];
            if (null !== $this->accessPortAndProtocols && \is_array($this->accessPortAndProtocols)) {
                $n = 0;
                foreach ($this->accessPortAndProtocols as $item) {
                    $res['AccessPortAndProtocols'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->accessPorts) {
            $res['AccessPorts'] = $this->accessPorts;
        }
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }
        if (null !== $this->resourceInstanceAccessStatus) {
            $res['ResourceInstanceAccessStatus'] = $this->resourceInstanceAccessStatus;
        }
        if (null !== $this->resourceInstanceEdition) {
            $res['ResourceInstanceEdition'] = $this->resourceInstanceEdition;
        }
        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }
        if (null !== $this->resourceInstanceIp) {
            $res['ResourceInstanceIp'] = $this->resourceInstanceIp;
        }
        if (null !== $this->resourceInstanceName) {
            $res['ResourceInstanceName'] = $this->resourceInstanceName;
        }
        if (null !== $this->resourceIp) {
            $res['ResourceIp'] = $this->resourceIp;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourcePorts) {
            $res['ResourcePorts'] = [];
            if (null !== $this->resourcePorts && \is_array($this->resourcePorts)) {
                $n = 0;
                foreach ($this->resourcePorts as $item) {
                    $res['ResourcePorts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceProduct) {
            $res['ResourceProduct'] = $this->resourceProduct;
        }
        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessInstanceId'])) {
            $model->accessInstanceId = $map['AccessInstanceId'];
        }
        if (isset($map['AccessPortAndProtocols'])) {
            if (!empty($map['AccessPortAndProtocols'])) {
                $model->accessPortAndProtocols = [];
                $n = 0;
                foreach ($map['AccessPortAndProtocols'] as $item) {
                    $model->accessPortAndProtocols[$n++] = null !== $item ? accessPortAndProtocols::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AccessPorts'])) {
            if (!empty($map['AccessPorts'])) {
                $model->accessPorts = $map['AccessPorts'];
            }
        }
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }
        if (isset($map['ResourceInstanceAccessStatus'])) {
            $model->resourceInstanceAccessStatus = $map['ResourceInstanceAccessStatus'];
        }
        if (isset($map['ResourceInstanceEdition'])) {
            $model->resourceInstanceEdition = $map['ResourceInstanceEdition'];
        }
        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }
        if (isset($map['ResourceInstanceIp'])) {
            $model->resourceInstanceIp = $map['ResourceInstanceIp'];
        }
        if (isset($map['ResourceInstanceName'])) {
            $model->resourceInstanceName = $map['ResourceInstanceName'];
        }
        if (isset($map['ResourceIp'])) {
            $model->resourceIp = $map['ResourceIp'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourcePorts'])) {
            if (!empty($map['ResourcePorts'])) {
                $model->resourcePorts = [];
                $n = 0;
                foreach ($map['ResourcePorts'] as $item) {
                    $model->resourcePorts[$n++] = null !== $item ? resourcePorts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceProduct'])) {
            $model->resourceProduct = $map['ResourceProduct'];
        }
        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }

        return $model;
    }
}
