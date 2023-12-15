<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\SyncFabricChaincodeStatusResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $chaincodeId;

    /**
     * @var string
     */
    public $input;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $path;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'chaincodeId' => 'ChaincodeId',
        'input'       => 'Input',
        'name'        => 'Name',
        'path'        => 'Path',
        'state'       => 'State',
        'type'        => 'Type',
        'version'     => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chaincodeId) {
            $res['ChaincodeId'] = $this->chaincodeId;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChaincodeId'])) {
            $model->chaincodeId = $map['ChaincodeId'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
