<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateDetectConfigRequest\alarmConfigs;

class UpdateDetectConfigRequest extends Model
{
    /**
     * @var alarmConfigs[]
     */
    public $alarmConfigs;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $detectConfigName;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'alarmConfigs' => 'alarmConfigs',
        'clientToken' => 'clientToken',
        'cronExpression' => 'cronExpression',
        'description' => 'description',
        'detectConfigName' => 'detectConfigName',
        'enabled' => 'enabled',
        'triggerType' => 'triggerType',
    ];

    public function validate()
    {
        if (\is_array($this->alarmConfigs)) {
            Model::validateArray($this->alarmConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmConfigs) {
            if (\is_array($this->alarmConfigs)) {
                $res['alarmConfigs'] = [];
                $n1 = 0;
                foreach ($this->alarmConfigs as $item1) {
                    $res['alarmConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->cronExpression) {
            $res['cronExpression'] = $this->cronExpression;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->detectConfigName) {
            $res['detectConfigName'] = $this->detectConfigName;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->triggerType) {
            $res['triggerType'] = $this->triggerType;
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
        if (isset($map['alarmConfigs'])) {
            if (!empty($map['alarmConfigs'])) {
                $model->alarmConfigs = [];
                $n1 = 0;
                foreach ($map['alarmConfigs'] as $item1) {
                    $model->alarmConfigs[$n1] = alarmConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['cronExpression'])) {
            $model->cronExpression = $map['cronExpression'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['detectConfigName'])) {
            $model->detectConfigName = $map['detectConfigName'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }

        return $model;
    }
}
