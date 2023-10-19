<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\resultDescriptions;

use AlibabaCloud\Tea\Model;

class resultDescription extends Model
{
    /**
     * @description The description.
     *
     * @example result description
     *
     * @var string
     */
    public $description;

    /**
     * @example false
     *
     * @var bool
     */
    public $hasChild;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $key;

    /**
     * @description Specifies whether the parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $mandatory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'hasChild'    => 'HasChild',
        'id'          => 'Id',
        'key'         => 'Key',
        'mandatory'   => 'Mandatory',
        'name'        => 'Name',
        'pid'         => 'Pid',
        'type'        => 'Type',
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
        if (null !== $this->hasChild) {
            $res['HasChild'] = $this->hasChild;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->mandatory) {
            $res['Mandatory'] = $this->mandatory;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultDescription
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HasChild'])) {
            $model->hasChild = $map['HasChild'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Mandatory'])) {
            $model->mandatory = $map['Mandatory'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
