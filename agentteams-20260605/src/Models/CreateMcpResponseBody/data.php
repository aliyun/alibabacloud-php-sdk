<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateMcpResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $addresses;

    /**
     * @var string
     */
    public $createType;

    /**
     * @var string
     */
    public $deployStatus;

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
    public $mcpServerConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'addresses' => 'Addresses',
        'createType' => 'CreateType',
        'deployStatus' => 'DeployStatus',
        'description' => 'Description',
        'id' => 'Id',
        'mcpServerConfig' => 'McpServerConfig',
        'name' => 'Name',
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
        if (\is_array($this->addresses)) {
            Model::validateArray($this->addresses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addresses) {
            if (\is_array($this->addresses)) {
                $res['Addresses'] = [];
                $n1 = 0;
                foreach ($this->addresses as $item1) {
                    $res['Addresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createType) {
            $res['CreateType'] = $this->createType;
        }

        if (null !== $this->deployStatus) {
            $res['DeployStatus'] = $this->deployStatus;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->mcpServerConfig) {
            $res['McpServerConfig'] = $this->mcpServerConfig;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = [];
                $n1 = 0;
                foreach ($map['Addresses'] as $item1) {
                    $model->addresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateType'])) {
            $model->createType = $map['CreateType'];
        }

        if (isset($map['DeployStatus'])) {
            $model->deployStatus = $map['DeployStatus'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['McpServerConfig'])) {
            $model->mcpServerConfig = $map['McpServerConfig'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
