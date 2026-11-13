<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerConsoleSummariesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerConsoleSummariesResponseBody\data\items\consumerGroups;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerConsoleSummariesResponseBody\data\items\credentials;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerConsoleSummariesResponseBody\data\items\localAccess;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerConsoleSummariesResponseBody\data\items\otherGateways;

class items extends Model
{
    /**
     * @var bool
     */
    public $allModels;

    /**
     * @var consumerGroups[]
     */
    public $consumerGroups;

    /**
     * @var string
     */
    public $consumerId;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var credentials[]
     */
    public $credentials;

    /**
     * @var string
     */
    public $deployStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var localAccess
     */
    public $localAccess;

    /**
     * @var int
     */
    public $modelCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var otherGateways[]
     */
    public $otherGateways;

    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'allModels' => 'allModels',
        'consumerGroups' => 'consumerGroups',
        'consumerId' => 'consumerId',
        'createTimestamp' => 'createTimestamp',
        'credentials' => 'credentials',
        'deployStatus' => 'deployStatus',
        'description' => 'description',
        'enable' => 'enable',
        'localAccess' => 'localAccess',
        'modelCount' => 'modelCount',
        'name' => 'name',
        'otherGateways' => 'otherGateways',
        'updateTimestamp' => 'updateTimestamp',
    ];

    public function validate()
    {
        if (\is_array($this->consumerGroups)) {
            Model::validateArray($this->consumerGroups);
        }
        if (\is_array($this->credentials)) {
            Model::validateArray($this->credentials);
        }
        if (null !== $this->localAccess) {
            $this->localAccess->validate();
        }
        if (\is_array($this->otherGateways)) {
            Model::validateArray($this->otherGateways);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allModels) {
            $res['allModels'] = $this->allModels;
        }

        if (null !== $this->consumerGroups) {
            if (\is_array($this->consumerGroups)) {
                $res['consumerGroups'] = [];
                $n1 = 0;
                foreach ($this->consumerGroups as $item1) {
                    $res['consumerGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->consumerId) {
            $res['consumerId'] = $this->consumerId;
        }

        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->credentials) {
            if (\is_array($this->credentials)) {
                $res['credentials'] = [];
                $n1 = 0;
                foreach ($this->credentials as $item1) {
                    $res['credentials'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deployStatus) {
            $res['deployStatus'] = $this->deployStatus;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->localAccess) {
            $res['localAccess'] = null !== $this->localAccess ? $this->localAccess->toArray($noStream) : $this->localAccess;
        }

        if (null !== $this->modelCount) {
            $res['modelCount'] = $this->modelCount;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->otherGateways) {
            if (\is_array($this->otherGateways)) {
                $res['otherGateways'] = [];
                $n1 = 0;
                foreach ($this->otherGateways as $item1) {
                    $res['otherGateways'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateTimestamp) {
            $res['updateTimestamp'] = $this->updateTimestamp;
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
        if (isset($map['allModels'])) {
            $model->allModels = $map['allModels'];
        }

        if (isset($map['consumerGroups'])) {
            if (!empty($map['consumerGroups'])) {
                $model->consumerGroups = [];
                $n1 = 0;
                foreach ($map['consumerGroups'] as $item1) {
                    $model->consumerGroups[$n1] = consumerGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['consumerId'])) {
            $model->consumerId = $map['consumerId'];
        }

        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }

        if (isset($map['credentials'])) {
            if (!empty($map['credentials'])) {
                $model->credentials = [];
                $n1 = 0;
                foreach ($map['credentials'] as $item1) {
                    $model->credentials[$n1] = credentials::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['deployStatus'])) {
            $model->deployStatus = $map['deployStatus'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['localAccess'])) {
            $model->localAccess = localAccess::fromMap($map['localAccess']);
        }

        if (isset($map['modelCount'])) {
            $model->modelCount = $map['modelCount'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['otherGateways'])) {
            if (!empty($map['otherGateways'])) {
                $model->otherGateways = [];
                $n1 = 0;
                foreach ($map['otherGateways'] as $item1) {
                    $model->otherGateways[$n1] = otherGateways::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['updateTimestamp'])) {
            $model->updateTimestamp = $map['updateTimestamp'];
        }

        return $model;
    }
}
