<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Milvus\V20231012\Models\UpdateInstanceRequest\components;

class UpdateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $autoBackup;

    /**
     * @var components[]
     */
    public $components;

    /**
     * @var string
     */
    public $configuration;

    /**
     * @var bool
     */
    public $ha;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'regionId' => 'RegionId',
        'autoBackup' => 'autoBackup',
        'components' => 'components',
        'configuration' => 'configuration',
        'ha' => 'ha',
        'instanceId' => 'instanceId',
        'instanceName' => 'instanceName',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        if (\is_array($this->components)) {
            Model::validateArray($this->components);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->autoBackup) {
            $res['autoBackup'] = $this->autoBackup;
        }

        if (null !== $this->components) {
            if (\is_array($this->components)) {
                $res['components'] = [];
                $n1 = 0;
                foreach ($this->components as $item1) {
                    $res['components'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->configuration) {
            $res['configuration'] = $this->configuration;
        }

        if (null !== $this->ha) {
            $res['ha'] = $this->ha;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['autoBackup'])) {
            $model->autoBackup = $map['autoBackup'];
        }

        if (isset($map['components'])) {
            if (!empty($map['components'])) {
                $model->components = [];
                $n1 = 0;
                foreach ($map['components'] as $item1) {
                    $model->components[$n1] = components::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['configuration'])) {
            $model->configuration = $map['configuration'];
        }

        if (isset($map['ha'])) {
            $model->ha = $map['ha'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
