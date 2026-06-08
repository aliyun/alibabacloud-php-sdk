<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProcessDefinitionsResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;

class processDefinitions extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $isSystem;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string[]
     */
    public $scopes;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'enabled' => 'Enabled',
        'id' => 'Id',
        'isSystem' => 'IsSystem',
        'name' => 'Name',
        'priority' => 'Priority',
        'scopes' => 'Scopes',
        'subType' => 'SubType',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->scopes)) {
            Model::validateArray($this->scopes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isSystem) {
            $res['IsSystem'] = $this->isSystem;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->scopes) {
            if (\is_array($this->scopes)) {
                $res['Scopes'] = [];
                $n1 = 0;
                foreach ($this->scopes as $item1) {
                    $res['Scopes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsSystem'])) {
            $model->isSystem = $map['IsSystem'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['Scopes'])) {
            if (!empty($map['Scopes'])) {
                $model->scopes = [];
                $n1 = 0;
                foreach ($map['Scopes'] as $item1) {
                    $model->scopes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
