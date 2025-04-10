<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppResponseBody\result\network;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppResponseBody\result\privateNetwork;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppResponseBody\result\tags;

class result extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var network[]
     */
    public $network;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var privateNetwork[]
     */
    public $privateNetwork;

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
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'appId' => 'appId',
        'appName' => 'appName',
        'appType' => 'appType',
        'chargeType' => 'chargeType',
        'createTime' => 'createTime',
        'description' => 'description',
        'instanceId' => 'instanceId',
        'modifiedTime' => 'modifiedTime',
        'network' => 'network',
        'ownerId' => 'ownerId',
        'privateNetwork' => 'privateNetwork',
        'regionId' => 'regionId',
        'scenario' => 'scenario',
        'status' => 'status',
        'tags' => 'tags',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->network)) {
            Model::validateArray($this->network);
        }
        if (\is_array($this->privateNetwork)) {
            Model::validateArray($this->privateNetwork);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['appName'] = $this->appName;
        }

        if (null !== $this->appType) {
            $res['appType'] = $this->appType;
        }

        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->modifiedTime) {
            $res['modifiedTime'] = $this->modifiedTime;
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

        if (null !== $this->ownerId) {
            $res['ownerId'] = $this->ownerId;
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

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->scenario) {
            $res['scenario'] = $this->scenario;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['appName'])) {
            $model->appName = $map['appName'];
        }

        if (isset($map['appType'])) {
            $model->appType = $map['appType'];
        }

        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['modifiedTime'])) {
            $model->modifiedTime = $map['modifiedTime'];
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

        if (isset($map['ownerId'])) {
            $model->ownerId = $map['ownerId'];
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

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['scenario'])) {
            $model->scenario = $map['scenario'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
