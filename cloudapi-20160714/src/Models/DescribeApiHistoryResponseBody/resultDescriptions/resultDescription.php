<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\resultDescriptions;

use AlibabaCloud\Tea\Model;

class resultDescription extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $key;

    /**
     * @var bool
     */
    public $hasChild;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $pid;

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
    public $id;
    protected $_name = [
        'type'        => 'Type',
        'key'         => 'Key',
        'hasChild'    => 'HasChild',
        'description' => 'Description',
        'pid'         => 'Pid',
        'mandatory'   => 'Mandatory',
        'name'        => 'Name',
        'id'          => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->hasChild) {
            $res['HasChild'] = $this->hasChild;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->mandatory) {
            $res['Mandatory'] = $this->mandatory;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['HasChild'])) {
            $model->hasChild = $map['HasChild'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['Mandatory'])) {
            $model->mandatory = $map['Mandatory'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
