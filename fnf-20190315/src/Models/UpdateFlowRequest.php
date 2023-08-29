<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class UpdateFlowRequest extends Model
{
    /**
     * @example version: v1.0\ntype: flow\nname: test\nsteps:\n  - type: pass\n    name: mypass
     *
     * @var string
     */
    public $definition;

    /**
     * @example test definition
     *
     * @var string
     */
    public $description;

    /**
     * @example flow
     *
     * @var string
     */
    public $name;

    /**
     * @example testRequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @example acs:ram::${accountID}:${role}
     *
     * @var string
     */
    public $roleArn;

    /**
     * @example FDL
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'definition'  => 'Definition',
        'description' => 'Description',
        'name'        => 'Name',
        'requestId'   => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
