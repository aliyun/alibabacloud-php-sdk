<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\GetChatConfigurationResponseBody;

use AlibabaCloud\Dara\Model;

class chatConfiguration extends Model
{
    /**
     * @var string
     */
    public $configuration;

    /**
     * @var string
     */
    public $createdDate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outputs;

    /**
     * @var string
     */
    public $ramRole;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updatedDate;
    protected $_name = [
        'configuration' => 'Configuration',
        'createdDate' => 'CreatedDate',
        'name' => 'Name',
        'outputs' => 'Outputs',
        'ramRole' => 'RamRole',
        'resourceGroupId' => 'ResourceGroupId',
        'type' => 'Type',
        'updatedDate' => 'UpdatedDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
        }

        if (null !== $this->createdDate) {
            $res['CreatedDate'] = $this->createdDate;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }

        if (null !== $this->ramRole) {
            $res['RamRole'] = $this->ramRole;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->updatedDate) {
            $res['UpdatedDate'] = $this->updatedDate;
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
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }

        if (isset($map['CreatedDate'])) {
            $model->createdDate = $map['CreatedDate'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }

        if (isset($map['RamRole'])) {
            $model->ramRole = $map['RamRole'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UpdatedDate'])) {
            $model->updatedDate = $map['UpdatedDate'];
        }

        return $model;
    }
}
