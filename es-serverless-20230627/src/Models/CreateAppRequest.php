<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateAppRequest\authentication;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateAppRequest\network;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateAppRequest\privateNetwork;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\CreateAppRequest\quotaInfo;

class CreateAppRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var authentication
     */
    public $authentication;

    /**
     * @var string
     */
    public $chargeType;

    /**
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
        'appName' => 'appName',
        'authentication' => 'authentication',
        'chargeType' => 'chargeType',
        'description' => 'description',
        'network' => 'network',
        'privateNetwork' => 'privateNetwork',
        'quotaInfo' => 'quotaInfo',
        'regionId' => 'regionId',
        'scenario' => 'scenario',
        'version' => 'version',
        'dryRun' => 'dryRun',
    ];

    public function validate()
    {
        if (null !== $this->authentication) {
            $this->authentication->validate();
        }
        if (\is_array($this->network)) {
            Model::validateArray($this->network);
        }
        if (\is_array($this->privateNetwork)) {
            Model::validateArray($this->privateNetwork);
        }
        if (null !== $this->quotaInfo) {
            $this->quotaInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['appName'] = $this->appName;
        }

        if (null !== $this->authentication) {
            $res['authentication'] = null !== $this->authentication ? $this->authentication->toArray($noStream) : $this->authentication;
        }

        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->network) {
            if (\is_array($this->network)) {
                $res['network'] = [];
                $n1 = 0;
                foreach ($this->network as $item1) {
                    $res['network'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->privateNetwork) {
            if (\is_array($this->privateNetwork)) {
                $res['privateNetwork'] = [];
                $n1 = 0;
                foreach ($this->privateNetwork as $item1) {
                    $res['privateNetwork'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->quotaInfo) {
            $res['quotaInfo'] = null !== $this->quotaInfo ? $this->quotaInfo->toArray($noStream) : $this->quotaInfo;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['network'] as $item1) {
                    $model->network[$n1++] = network::fromMap($item1);
                }
            }
        }

        if (isset($map['privateNetwork'])) {
            if (!empty($map['privateNetwork'])) {
                $model->privateNetwork = [];
                $n1 = 0;
                foreach ($map['privateNetwork'] as $item1) {
                    $model->privateNetwork[$n1++] = privateNetwork::fromMap($item1);
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
