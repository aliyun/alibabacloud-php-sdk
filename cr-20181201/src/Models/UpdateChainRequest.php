<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class UpdateChainRequest extends Model
{
    /**
     * @var string
     */
    public $chainConfig;

    /**
     * @var string
     */
    public $chainId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $scopeExclude;
    protected $_name = [
        'chainConfig' => 'ChainConfig',
        'chainId' => 'ChainId',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'scopeExclude' => 'ScopeExclude',
    ];

    public function validate()
    {
        if (\is_array($this->scopeExclude)) {
            Model::validateArray($this->scopeExclude);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chainConfig) {
            $res['ChainConfig'] = $this->chainConfig;
        }

        if (null !== $this->chainId) {
            $res['ChainId'] = $this->chainId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->scopeExclude) {
            if (\is_array($this->scopeExclude)) {
                $res['ScopeExclude'] = [];
                $n1 = 0;
                foreach ($this->scopeExclude as $item1) {
                    $res['ScopeExclude'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ChainConfig'])) {
            $model->chainConfig = $map['ChainConfig'];
        }

        if (isset($map['ChainId'])) {
            $model->chainId = $map['ChainId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ScopeExclude'])) {
            if (!empty($map['ScopeExclude'])) {
                $model->scopeExclude = [];
                $n1 = 0;
                foreach ($map['ScopeExclude'] as $item1) {
                    $model->scopeExclude[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
