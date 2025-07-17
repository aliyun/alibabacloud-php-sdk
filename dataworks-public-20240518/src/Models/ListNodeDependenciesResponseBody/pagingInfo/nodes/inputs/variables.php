<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesResponseBody\pagingInfo\nodes\inputs;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesResponseBody\pagingInfo\nodes\inputs\variables\node;
use AlibabaCloud\Tea\Model;

class variables extends Model
{
    /**
     * @description The artifact type.
     *
     * @example Variable
     *
     * @var string
     */
    public $artifactType;

    /**
     * @description The variable ID.
     *
     * @example 543218872620113XXXX
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the variable.
     *
     * @example input
     *
     * @var string
     */
    public $name;

    /**
     * @description The node to which the variable belongs.
     *
     * @var node
     */
    public $node;

    /**
     * @description The scope of the variable. Valid values:
     *
     *   NodeParameter
     *   NodeContext
     *   Workflow
     *   Workspace
     *
     * @example NodeParameter
     *
     * @var string
     */
    public $scope;

    /**
     * @description The type of the variable. Valid values:
     *
     *   NoKvVariableExpression
     *   Constant
     *   PassThrough
     *   System
     *   NodeOutput
     *
     * @example Constant
     *
     * @var string
     */
    public $type;

    /**
     * @description The value of the variable.
     *
     * @example 111
     *
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

    public function validate() {}

    public function toMap()
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
            $res['Node'] = null !== $this->node ? $this->node->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return variables
     */
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
