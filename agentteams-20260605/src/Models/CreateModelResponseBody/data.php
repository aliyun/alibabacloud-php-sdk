<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateModelResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

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
    public $protocols;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $providerName;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'protocols' => 'Protocols',
        'provider' => 'Provider',
        'providerName' => 'ProviderName',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->protocols)) {
            Model::validateArray($this->protocols);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->protocols) {
            if (\is_array($this->protocols)) {
                $res['Protocols'] = [];
                $n1 = 0;
                foreach ($this->protocols as $item1) {
                    $res['Protocols'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }

        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = [];
                $n1 = 0;
                foreach ($map['Protocols'] as $item1) {
                    $model->protocols[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }

        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
