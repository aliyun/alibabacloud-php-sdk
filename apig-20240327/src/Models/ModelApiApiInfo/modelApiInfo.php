<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ModelApiApiInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ModelApiApiInfo\modelApiInfo\resolvedModelSelection;
use AlibabaCloud\SDK\APIG\V20240327\Models\ModelSelection;

class modelApiInfo extends Model
{
    /**
     * @var bool
     */
    public $directSupplyFallbackEnabled;

    /**
     * @var string
     */
    public $exposureMode;

    /**
     * @var ModelSelection
     */
    public $modelSelection;

    /**
     * @var resolvedModelSelection
     */
    public $resolvedModelSelection;

    /**
     * @var string
     */
    public $routingMode;
    protected $_name = [
        'directSupplyFallbackEnabled' => 'directSupplyFallbackEnabled',
        'exposureMode' => 'exposureMode',
        'modelSelection' => 'modelSelection',
        'resolvedModelSelection' => 'resolvedModelSelection',
        'routingMode' => 'routingMode',
    ];

    public function validate()
    {
        if (null !== $this->modelSelection) {
            $this->modelSelection->validate();
        }
        if (null !== $this->resolvedModelSelection) {
            $this->resolvedModelSelection->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directSupplyFallbackEnabled) {
            $res['directSupplyFallbackEnabled'] = $this->directSupplyFallbackEnabled;
        }

        if (null !== $this->exposureMode) {
            $res['exposureMode'] = $this->exposureMode;
        }

        if (null !== $this->modelSelection) {
            $res['modelSelection'] = null !== $this->modelSelection ? $this->modelSelection->toArray($noStream) : $this->modelSelection;
        }

        if (null !== $this->resolvedModelSelection) {
            $res['resolvedModelSelection'] = null !== $this->resolvedModelSelection ? $this->resolvedModelSelection->toArray($noStream) : $this->resolvedModelSelection;
        }

        if (null !== $this->routingMode) {
            $res['routingMode'] = $this->routingMode;
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
        if (isset($map['directSupplyFallbackEnabled'])) {
            $model->directSupplyFallbackEnabled = $map['directSupplyFallbackEnabled'];
        }

        if (isset($map['exposureMode'])) {
            $model->exposureMode = $map['exposureMode'];
        }

        if (isset($map['modelSelection'])) {
            $model->modelSelection = ModelSelection::fromMap($map['modelSelection']);
        }

        if (isset($map['resolvedModelSelection'])) {
            $model->resolvedModelSelection = resolvedModelSelection::fromMap($map['resolvedModelSelection']);
        }

        if (isset($map['routingMode'])) {
            $model->routingMode = $map['routingMode'];
        }

        return $model;
    }
}
