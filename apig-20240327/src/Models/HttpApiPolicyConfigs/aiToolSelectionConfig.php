<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiToolSelectionConfig\enableConditions;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiToolSelectionConfig\pluginStatus;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiToolSelectionConfig\queryRewriting;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiToolSelectionConfig\toolReranking;

class aiToolSelectionConfig extends Model
{
    /**
     * @var enableConditions
     */
    public $enableConditions;

    /**
     * @var pluginStatus
     */
    public $pluginStatus;

    /**
     * @var queryRewriting
     */
    public $queryRewriting;

    /**
     * @var toolReranking
     */
    public $toolReranking;
    protected $_name = [
        'enableConditions' => 'enableConditions',
        'pluginStatus' => 'pluginStatus',
        'queryRewriting' => 'queryRewriting',
        'toolReranking' => 'toolReranking',
    ];

    public function validate()
    {
        if (null !== $this->enableConditions) {
            $this->enableConditions->validate();
        }
        if (null !== $this->pluginStatus) {
            $this->pluginStatus->validate();
        }
        if (null !== $this->queryRewriting) {
            $this->queryRewriting->validate();
        }
        if (null !== $this->toolReranking) {
            $this->toolReranking->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableConditions) {
            $res['enableConditions'] = null !== $this->enableConditions ? $this->enableConditions->toArray($noStream) : $this->enableConditions;
        }

        if (null !== $this->pluginStatus) {
            $res['pluginStatus'] = null !== $this->pluginStatus ? $this->pluginStatus->toArray($noStream) : $this->pluginStatus;
        }

        if (null !== $this->queryRewriting) {
            $res['queryRewriting'] = null !== $this->queryRewriting ? $this->queryRewriting->toArray($noStream) : $this->queryRewriting;
        }

        if (null !== $this->toolReranking) {
            $res['toolReranking'] = null !== $this->toolReranking ? $this->toolReranking->toArray($noStream) : $this->toolReranking;
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
        if (isset($map['enableConditions'])) {
            $model->enableConditions = enableConditions::fromMap($map['enableConditions']);
        }

        if (isset($map['pluginStatus'])) {
            $model->pluginStatus = pluginStatus::fromMap($map['pluginStatus']);
        }

        if (isset($map['queryRewriting'])) {
            $model->queryRewriting = queryRewriting::fromMap($map['queryRewriting']);
        }

        if (isset($map['toolReranking'])) {
            $model->toolReranking = toolReranking::fromMap($map['toolReranking']);
        }

        return $model;
    }
}
