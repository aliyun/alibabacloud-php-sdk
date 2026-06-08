<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProcessInstanceResponseBody\processInstance\approvalProcessDefinition;

use AlibabaCloud\Dara\Model;

class approvalNodes extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string[]
     */
    public $assignees;

    /**
     * @var string
     */
    public $extensionProperties;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'accountType' => 'AccountType',
        'assignees' => 'Assignees',
        'extensionProperties' => 'ExtensionProperties',
        'id' => 'Id',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->assignees)) {
            Model::validateArray($this->assignees);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }

        if (null !== $this->assignees) {
            if (\is_array($this->assignees)) {
                $res['Assignees'] = [];
                $n1 = 0;
                foreach ($this->assignees as $item1) {
                    $res['Assignees'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->extensionProperties) {
            $res['ExtensionProperties'] = $this->extensionProperties;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }

        if (isset($map['Assignees'])) {
            if (!empty($map['Assignees'])) {
                $model->assignees = [];
                $n1 = 0;
                foreach ($map['Assignees'] as $item1) {
                    $model->assignees[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExtensionProperties'])) {
            $model->extensionProperties = $map['ExtensionProperties'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
