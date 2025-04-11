<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\resultDescriptions;

use AlibabaCloud\Dara\Model;

class resultDescription extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
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
        'hasChild' => 'HasChild',
        'id' => 'Id',
        'key' => 'Key',
        'mandatory' => 'Mandatory',
        'name' => 'Name',
        'pid' => 'Pid',
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
