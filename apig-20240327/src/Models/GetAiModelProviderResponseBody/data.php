<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetAiModelProviderResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetAiModelProviderResponseBody\data\modelCards;
use AlibabaCloud\SDK\APIG\V20240327\Models\ServiceInfo;

class data extends Model
{
    /**
     * @var ServiceInfo[]
     */
    public $boundServices;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var modelCards[]
     */
    public $modelCards;

    /**
     * @var int
     */
    public $modelCount;

    /**
     * @var string
     */
    public $modelProviderId;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'boundServices' => 'boundServices',
        'displayName' => 'displayName',
        'gatewayId' => 'gatewayId',
        'modelCards' => 'modelCards',
        'modelCount' => 'modelCount',
        'modelProviderId' => 'modelProviderId',
        'provider' => 'provider',
        'source' => 'source',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        if (\is_array($this->boundServices)) {
            Model::validateArray($this->boundServices);
        }
        if (\is_array($this->modelCards)) {
            Model::validateArray($this->modelCards);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundServices) {
            if (\is_array($this->boundServices)) {
                $res['boundServices'] = [];
                $n1 = 0;
                foreach ($this->boundServices as $item1) {
                    $res['boundServices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->modelCards) {
            if (\is_array($this->modelCards)) {
                $res['modelCards'] = [];
                $n1 = 0;
                foreach ($this->modelCards as $item1) {
                    $res['modelCards'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelCount) {
            $res['modelCount'] = $this->modelCount;
        }

        if (null !== $this->modelProviderId) {
            $res['modelProviderId'] = $this->modelProviderId;
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['boundServices'])) {
            if (!empty($map['boundServices'])) {
                $model->boundServices = [];
                $n1 = 0;
                foreach ($map['boundServices'] as $item1) {
                    $model->boundServices[$n1] = ServiceInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['modelCards'])) {
            if (!empty($map['modelCards'])) {
                $model->modelCards = [];
                $n1 = 0;
                foreach ($map['modelCards'] as $item1) {
                    $model->modelCards[$n1] = modelCards::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['modelCount'])) {
            $model->modelCount = $map['modelCount'];
        }

        if (isset($map['modelProviderId'])) {
            $model->modelProviderId = $map['modelProviderId'];
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
