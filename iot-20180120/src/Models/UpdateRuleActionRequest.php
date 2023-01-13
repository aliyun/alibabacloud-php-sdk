<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateRuleActionRequest extends Model
{
    /**
     * @var int
     */
    public $actionId;

    /**
     * @var string
     */
    public $configuration;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'actionId'      => 'ActionId',
        'configuration' => 'Configuration',
        'iotInstanceId' => 'IotInstanceId',
        'type'          => 'Type',
    ];

    public function validate()
    {
        Model::validateRequired('actionId', $this->actionId, true);
        Model::validateRequired('configuration', $this->configuration, true);
        Model::validateRequired('type', $this->type, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionId) {
            $res['ActionId'] = $this->actionId;
        }
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRuleActionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionId'])) {
            $model->actionId = $map['ActionId'];
        }
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
