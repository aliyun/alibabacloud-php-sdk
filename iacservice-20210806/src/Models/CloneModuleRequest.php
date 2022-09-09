<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Tea\Model;

class CloneModuleRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleSource;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'description'   => 'description',
        'moduleId'      => 'moduleId',
        'moduleSource'  => 'moduleSource',
        'moduleVersion' => 'moduleVersion',
        'name'          => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }
        if (null !== $this->moduleSource) {
            $res['moduleSource'] = $this->moduleSource;
        }
        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloneModuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }
        if (isset($map['moduleSource'])) {
            $model->moduleSource = $map['moduleSource'];
        }
        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
