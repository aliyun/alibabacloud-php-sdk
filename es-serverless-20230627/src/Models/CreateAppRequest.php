<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models;

use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateAppRequest\authentication;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateAppRequest\network;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateAppRequest\privateNetwork;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateAppRequest\quotaInfo;
use AlibabaCloud\Tea\Model;

class CreateAppRequest extends Model
{
    /**
     * @description 应用名
     *
     * This parameter is required.
     * @var string
     */
    public $appName;

    /**
     * @description This parameter is required.
     *
     * @var authentication
     */
    public $authentication;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description 应用备注
     *
     * @var string
     */
    public $description;

    /**
     * @var network[]
     */
    public $network;

    /**
     * @var privateNetwork[]
     */
    public $privateNetwork;

    /**
     * @var quotaInfo
     */
    public $quotaInfo;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scenario;

    /**
     * @var string
     */
    public $version;

    /**
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'appName'        => 'appName',
        'authentication' => 'authentication',
        'chargeType'     => 'chargeType',
        'description'    => 'description',
        'network'        => 'network',
        'privateNetwork' => 'privateNetwork',
        'quotaInfo'      => 'quotaInfo',
        'regionId'       => 'regionId',
        'scenario'       => 'scenario',
        'version'        => 'version',
        'dryRun'         => 'dryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['appName'] = $this->appName;
        }
        if (null !== $this->authentication) {
            $res['authentication'] = null !== $this->authentication ? $this->authentication->toMap() : null;
        }
        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->network) {
            $res['network'] = [];
            if (null !== $this->network && \is_array($this->network)) {
                $n = 0;
                foreach ($this->network as $item) {
                    $res['network'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->privateNetwork) {
            $res['privateNetwork'] = [];
            if (null !== $this->privateNetwork && \is_array($this->privateNetwork)) {
                $n = 0;
                foreach ($this->privateNetwork as $item) {
                    $res['privateNetwork'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->quotaInfo) {
            $res['quotaInfo'] = null !== $this->quotaInfo ? $this->quotaInfo->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->scenario) {
            $res['scenario'] = $this->scenario;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appName'])) {
            $model->appName = $map['appName'];
        }
        if (isset($map['authentication'])) {
            $model->authentication = authentication::fromMap($map['authentication']);
        }
        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['network'])) {
            if (!empty($map['network'])) {
                $model->network = [];
                $n              = 0;
                foreach ($map['network'] as $item) {
                    $model->network[$n++] = null !== $item ? network::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['privateNetwork'])) {
            if (!empty($map['privateNetwork'])) {
                $model->privateNetwork = [];
                $n                     = 0;
                foreach ($map['privateNetwork'] as $item) {
                    $model->privateNetwork[$n++] = null !== $item ? privateNetwork::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['quotaInfo'])) {
            $model->quotaInfo = quotaInfo::fromMap($map['quotaInfo']);
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['scenario'])) {
            $model->scenario = $map['scenario'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
