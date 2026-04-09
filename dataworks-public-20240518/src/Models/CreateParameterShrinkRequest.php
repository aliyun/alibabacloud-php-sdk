<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateParameterShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $propertiesShrink;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'name' => 'Name',
        'owner' => 'Owner',
        'projectId' => 'ProjectId',
        'propertiesShrink' => 'Properties',
        'scope' => 'Scope',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->propertiesShrink) {
            $res['Properties'] = $this->propertiesShrink;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Properties'])) {
            $model->propertiesShrink = $map['Properties'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
