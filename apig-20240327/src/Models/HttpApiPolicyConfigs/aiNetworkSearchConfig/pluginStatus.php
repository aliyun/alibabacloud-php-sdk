<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiPolicyConfigs\aiNetworkSearchConfig;

use AlibabaCloud\Dara\Model;

class pluginStatus extends Model
{
    /**
     * @var string[]
     */
    public $errorLogs;

    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var bool
     */
    public $serviceHealthy;
    protected $_name = [
        'errorLogs' => 'errorLogs',
        'pluginId' => 'pluginId',
        'serviceHealthy' => 'serviceHealthy',
    ];

    public function validate()
    {
        if (\is_array($this->errorLogs)) {
            Model::validateArray($this->errorLogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorLogs) {
            if (\is_array($this->errorLogs)) {
                $res['errorLogs'] = [];
                foreach ($this->errorLogs as $key1 => $value1) {
                    $res['errorLogs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->pluginId) {
            $res['pluginId'] = $this->pluginId;
        }

        if (null !== $this->serviceHealthy) {
            $res['serviceHealthy'] = $this->serviceHealthy;
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
        if (isset($map['errorLogs'])) {
            if (!empty($map['errorLogs'])) {
                $model->errorLogs = [];
                foreach ($map['errorLogs'] as $key1 => $value1) {
                    $model->errorLogs[$key1] = $value1;
                }
            }
        }

        if (isset($map['pluginId'])) {
            $model->pluginId = $map['pluginId'];
        }

        if (isset($map['serviceHealthy'])) {
            $model->serviceHealthy = $map['serviceHealthy'];
        }

        return $model;
    }
}
