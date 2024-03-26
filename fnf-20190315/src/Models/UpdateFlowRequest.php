<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class UpdateFlowRequest extends Model
{
    /**
     * @description The flow definition, which follows the flow definition language (FDL) syntax standard. Considering compatibility, the system supports the two flow definition specifications.
     *
     * @example version: v1.0\ntype: flow\nname: test\nsteps:\n  - type: pass\n    name: mypass
     *
     * @var string
     */
    public $definition;

    /**
     * @description The description of the flow.
     *
     * @example test definition
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the flow. The name must be unique within the region and cannot be modified after the flow is created. The name must meet the following conventions:
     *
     *   The name can contain letters, digits, underscores (\_), and hyphens (-).
     *   The name must start with a letter or an underscore (\_).
     *   The name is case-sensitive.
     *   The name must be 1 to 128 characters in length.
     *
     * @example flow
     *
     * @var string
     */
    public $name;

    /**
     * @description The Alibaba Cloud resource name (ARN) of the authorized role on which the execution of the flow relies. During the execution of the flow, the flow execution engine assumes the role to call API operations of relevant services.
     *
     * @example acs:ram::${accountID}:${role}
     *
     * @var string
     */
    public $roleArn;

    /**
     * @description The type of the flow. Valid value: **FDL**.
     *
     * @example FDL
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'definition'  => 'Definition',
        'description' => 'Description',
        'name'        => 'Name',
        'roleArn'     => 'RoleArn',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
