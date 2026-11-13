<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetAiModelSourceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var int
     */
    public $modelCount;

    /**
     * @var string
     */
    public $modelSourceId;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'displayName' => 'displayName',
        'gatewayId' => 'gatewayId',
        'modelCount' => 'modelCount',
        'modelSourceId' => 'modelSourceId',
        'provider' => 'provider',
        'serviceId' => 'serviceId',
        'updateTime' => 'updateTime',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->modelCount) {
            $res['modelCount'] = $this->modelCount;
        }

        if (null !== $this->modelSourceId) {
            $res['modelSourceId'] = $this->modelSourceId;
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['modelCount'])) {
            $model->modelCount = $map['modelCount'];
        }

        if (isset($map['modelSourceId'])) {
            $model->modelSourceId = $map['modelSourceId'];
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
