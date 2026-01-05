<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesResponseBody\pagingInfo\nodes\inputs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesResponseBody\pagingInfo\nodes\inputs\variables\node;

class variables extends Model
{
    /**
     * @var string
     */
    public $artifactType;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var node
     */
    public $node;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'artifactType' => 'ArtifactType',
        'id' => 'Id',
        'name' => 'Name',
        'node' => 'Node',
        'scope' => 'Scope',
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (null !== $this->node) {
            $this->node->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactType) {
            $res['ArtifactType'] = $this->artifactType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->node) {
            $res['Node'] = null !== $this->node ? $this->node->toArray($noStream) : $this->node;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['ArtifactType'])) {
            $model->artifactType = $map['ArtifactType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Node'])) {
            $model->node = node::fromMap($map['Node']);
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
