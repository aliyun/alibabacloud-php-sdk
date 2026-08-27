<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListInstallableGatewaysResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayPhase;

    /**
     * @var bool
     */
    public $installable;

    /**
     * @var string
     */
    public $installableFalseReasonType;

    /**
     * @var string
     */
    public $installedPluginVersion;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'engineVersion' => 'engineVersion',
        'gatewayId' => 'gatewayId',
        'gatewayPhase' => 'gatewayPhase',
        'installable' => 'installable',
        'installableFalseReasonType' => 'installableFalseReasonType',
        'installedPluginVersion' => 'installedPluginVersion',
        'name' => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->engineVersion) {
            $res['engineVersion'] = $this->engineVersion;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->gatewayPhase) {
            $res['gatewayPhase'] = $this->gatewayPhase;
        }

        if (null !== $this->installable) {
            $res['installable'] = $this->installable;
        }

        if (null !== $this->installableFalseReasonType) {
            $res['installableFalseReasonType'] = $this->installableFalseReasonType;
        }

        if (null !== $this->installedPluginVersion) {
            $res['installedPluginVersion'] = $this->installedPluginVersion;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['engineVersion'])) {
            $model->engineVersion = $map['engineVersion'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['gatewayPhase'])) {
            $model->gatewayPhase = $map['gatewayPhase'];
        }

        if (isset($map['installable'])) {
            $model->installable = $map['installable'];
        }

        if (isset($map['installableFalseReasonType'])) {
            $model->installableFalseReasonType = $map['installableFalseReasonType'];
        }

        if (isset($map['installedPluginVersion'])) {
            $model->installedPluginVersion = $map['installedPluginVersion'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
