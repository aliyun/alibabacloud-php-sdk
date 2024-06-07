<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateCrowdRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example This is a test.
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example pairec-cn-abcdefg1234
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example os=android
     *
     * @var string
     */
    public $label;

    /**
     * @description This parameter is required.
     *
     * @example xx人群
     *
     * @var string
     */
    public $name;

    /**
     * @example ManualInput
     *
     * @var string
     */
    public $source;

    /**
     * @example user1,user2,user3
     *
     * @var string
     */
    public $users;
    protected $_name = [
        'description' => 'Description',
        'instanceId'  => 'InstanceId',
        'label'       => 'Label',
        'name'        => 'Name',
        'source'      => 'Source',
        'users'       => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCrowdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Users'])) {
            $model->users = $map['Users'];
        }

        return $model;
    }
}
