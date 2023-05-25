<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\resultDescriptions;

use AlibabaCloud\Tea\Model;

class resultDescription extends Model
{
    /**
     * @description The ContentType header type used when you call the backend service over HTTP.
     *
     *   **DEFAULT**: the default header type in API Gateway
     *   **CUSTOM**: a custom header type
     *   **CLIENT**: the ContentType header type of the client
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Client IP Address
     *
     * @example true
     *
     * @var bool
     */
    public $hasChild;

    /**
     * @description The result returned when the Mock mode is enabled.
     *
     * @example id
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $key;

    /**
     * @description The creation time of the API.
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
     * @description The OSS bucket.
     *
     * @example pid
     *
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
