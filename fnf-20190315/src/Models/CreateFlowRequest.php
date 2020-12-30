<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class CreateFlowRequest extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $externalStorageLocation;
    protected $_name = [
        'requestId'               => 'RequestId',
        'name'                    => 'Name',
        'definition'              => 'Definition',
        'description'             => 'Description',
        'type'                    => 'Type',
        'roleArn'                 => 'RoleArn',
        'externalStorageLocation' => 'ExternalStorageLocation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->externalStorageLocation) {
            $res['ExternalStorageLocation'] = $this->externalStorageLocation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['ExternalStorageLocation'])) {
            $model->externalStorageLocation = $map['ExternalStorageLocation'];
        }

        return $model;
    }
}
