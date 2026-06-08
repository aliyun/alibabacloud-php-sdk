<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateProcessDefinitionRequest;

use AlibabaCloud\Dara\Model;

class approvalNodes extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $assignees;

    /**
     * @var mixed[]
     */
    public $extensionProperties;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'accountType' => 'AccountType',
        'assignees' => 'Assignees',
        'extensionProperties' => 'ExtensionProperties',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->extensionProperties)) {
            Model::validateArray($this->extensionProperties);
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
            $res['Assignees'] = $this->assignees;
        }

        if (null !== $this->extensionProperties) {
            if (\is_array($this->extensionProperties)) {
                $res['ExtensionProperties'] = [];
                foreach ($this->extensionProperties as $key1 => $value1) {
                    $res['ExtensionProperties'][$key1] = $value1;
                }
            }
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
            $model->assignees = $map['Assignees'];
        }

        if (isset($map['ExtensionProperties'])) {
            if (!empty($map['ExtensionProperties'])) {
                $model->extensionProperties = [];
                foreach ($map['ExtensionProperties'] as $key1 => $value1) {
                    $model->extensionProperties[$key1] = $value1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
